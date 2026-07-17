<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_accesspanel', get_string('pluginname', 'local_accesspanel'));
    $ADMIN->add('localplugins', $settings);

    // ── Conexion al backend ────────────────────────────────────────────────
    $settings->add(new admin_setting_heading(
        'local_accesspanel/backendheading',
        get_string('settings_backendheading', 'local_accesspanel'),
        get_string('settings_backendheading_desc', 'local_accesspanel')
    ));

    $settings->add(new admin_setting_configtext(
        'local_accesspanel/toolurl',
        get_string('settings_toolurl', 'local_accesspanel'),
        get_string('settings_toolurl_desc', 'local_accesspanel'),
        '',
        PARAM_URL
    ));

    $settings->add(new admin_setting_configpasswordunmask(
        'local_accesspanel/sharedsecret',
        get_string('settings_sharedsecret', 'local_accesspanel'),
        get_string('settings_sharedsecret_desc', 'local_accesspanel'),
        ''
    ));

    // ── Secciones visibles del panel (config original de FARO) ────────────
    $settings->add(new admin_setting_heading(
        'local_accesspanel/panelheading',
        get_string('settings_panelheading', 'local_accesspanel'),
        ''
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_accesspanel/enablenav',
        get_string('navigation', 'local_accesspanel'),
        '',
        1
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_accesspanel/enablereading',
        get_string('reading', 'local_accesspanel'),
        '',
        1
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_accesspanel/enablevisual',
        get_string('visualsettings', 'local_accesspanel'),
        '',
        1
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_accesspanel/enablesummary',
        get_string('summary', 'local_accesspanel'),
        '',
        1
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_accesspanel/enableprogress',
        get_string('progress', 'local_accesspanel'),
        '',
        1
    ));
}
