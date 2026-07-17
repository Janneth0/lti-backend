<?php
defined('MOODLE_INTERNAL') || die();

/**
 * Callback estandar de Moodle: se ejecuta justo antes del cierre del <body>
 * en todas las paginas. Inyecta el panel de accesibilidad FARO y lo conecta
 * con el backend (onboarding persistente, ajustes, saludo con nombre).
 */
function local_accesspanel_before_footer() {
    global $USER, $PAGE, $COURSE, $CFG;

    // No mostrar a usuarios no logueados o invitados.
    if (!isloggedin() || isguestuser()) {
        return '';
    }

    $enablenav      = get_config('local_accesspanel', 'enablenav') !== '0';
    $enablereading  = get_config('local_accesspanel', 'enablereading') !== '0';
    $enablevisual   = get_config('local_accesspanel', 'enablevisual') !== '0';
    $enablesummary  = get_config('local_accesspanel', 'enablesummary') !== '0';
    $enableprogress = get_config('local_accesspanel', 'enableprogress') !== '0';

    $toolurl = get_config('local_accesspanel', 'toolurl');
    $secret  = get_config('local_accesspanel', 'sharedsecret');

    $templatepath = __DIR__ . '/templates/faro.html';
    $html = '';

    if (file_exists($templatepath)) {
        $html = file_get_contents($templatepath);
    } else {
        return '<p>No se encontro faro.html</p>';
    }

    // Si el backend no esta configurado, mostramos el panel sin conexion
    // (modo degradado: onboarding y ajustes no persisten, pero la
    // herramienta sigue siendo usable localmente).
    $config = [
        'backendEnabled' => false,
        'firstname'      => $USER->firstname,
        'fullname'       => fullname($USER),
    ];

    if (!empty($toolurl) && !empty($secret)) {
        $payload = [
            'moodle_user_sub'  => (string) $USER->id,
            'moodle_course_id' => isset($COURSE->id) ? (string) $COURSE->id : null,
            'moodleUrl'        => $CFG->wwwroot,
            'iat'              => time(),
            'exp'              => time() + 3600,
        ];

        $config['backendEnabled'] = true;
        $config['toolUrl']        = rtrim($toolurl, '/');
        $config['preauthToken']   = local_accesspanel_sign_token($payload, $secret);
    }

    // Config del panel: que secciones mostrar (definido por el admin).
    $config['sections'] = [
        'navigation'  => $enablenav,
        'reading'     => $enablereading,
        'visual'      => $enablevisual,
        'summary'     => $enablesummary,
        'progress'    => $enableprogress,
    ];

    $configscript = '<script>window.FARO_CONFIG = ' . json_encode($config, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) . ';</script>';

    return $configscript . $html;
}

/**
 * Firma un token HS256 (mismo formato que espera el backend en
 * POST /tool/token vía el campo `preauth_token`). No es un JWT de libreria
 * completa: es la implementacion minima suficiente para HS256, igual a la
 * que usa el backend para verificarlo con `jsonwebtoken`.
 */
function local_accesspanel_sign_token(array $payload, string $secret): string {
    $header = local_accesspanel_b64url(json_encode(['alg' => 'HS256', 'typ' => 'JWT']));
    $body   = local_accesspanel_b64url(json_encode($payload));
    $sig    = hash_hmac('sha256', "$header.$body", $secret, true);
    $sigb64 = local_accesspanel_b64url_raw($sig);
    return "$header.$body.$sigb64";
}

function local_accesspanel_b64url(string $data): string {
    return local_accesspanel_b64url_raw($data);
}

function local_accesspanel_b64url_raw(string $data): string {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}
