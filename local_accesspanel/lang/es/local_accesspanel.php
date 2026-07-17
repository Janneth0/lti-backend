<?php
$string['pluginname'] = 'Panel de Accesibilidad FARO';
$string['opentoolbar'] = 'Abrir panel de accesibilidad';
$string['close'] = 'Cerrar';
$string['welcome'] = '¡Hola, {$a}!';
$string['welcomeback'] = '¡Hola de nuevo, {$a}!';
$string['navigation'] = 'Navegación del curso';
$string['nocoursenav'] = 'No hay navegación de curso disponible en esta página.';
$string['reading'] = 'Lectura asistida';
$string['readcontent'] = 'Leer contenido';
$string['stopreading'] = 'Detener';
$string['speed'] = 'Velocidad';
$string['visualsettings'] = 'Ajustes visuales';
$string['decreasefont'] = 'Disminuir tamaño de letra';
$string['resetfont'] = 'Restablecer tamaño de letra';
$string['increasefont'] = 'Aumentar tamaño de letra';
$string['highcontrast'] = 'Alto contraste';
$string['dyslexiafont'] = 'Fuente para dislexia';
$string['spacing'] = 'Espaciado de texto';
$string['summary'] = 'Resumen de contenido';
$string['generatesummary'] = 'Generar resumen';
$string['progress'] = 'Progreso del curso';
$string['completionnotenabled'] = 'El seguimiento de finalización no está activado en este curso.';

// Configuración
$string['settings_backendheading'] = 'Conexión con el backend';
$string['settings_backendheading_desc'] = 'Datos del servidor de accesibilidad (API Node + base de datos propia) que guarda el perfil, el estado de onboarding y los eventos de uso de cada usuario. Si se dejan vacíos, el panel funciona en modo local sin persistencia (el onboarding se repite siempre).';
$string['settings_toolurl'] = 'URL del backend';
$string['settings_toolurl_desc'] = 'URL base del backend de accesibilidad (ej. https://a11y-api.tudominio.com), sin barra final.';
$string['settings_sharedsecret'] = 'Secreto compartido';
$string['settings_sharedsecret_desc'] = 'Clave HMAC-SHA256 usada para firmar el token que identifica al usuario ante el backend. Debe coincidir exactamente con MOODLE_SHARED_SECRET en el .env del backend.';
$string['settings_panelheading'] = 'Secciones visibles del panel';

// Privacidad
$string['privacy:metadata:accesspanel_backend'] = 'Para identificar al usuario, guardar sus preferencias y registrar eventos de uso con fines de analítica, el plugin envía datos al backend externo de accesibilidad.';
$string['privacy:metadata:accesspanel_backend:moodle_user_sub'] = 'El id del usuario en Moodle, usado como identificador único.';
$string['privacy:metadata:accesspanel_backend:moodle_course_id'] = 'El id del curso en el que se usó la herramienta.';
$string['privacy:metadata:accesspanel_backend:user_agent'] = 'El user-agent del navegador, para fines de diagnóstico.';
$string['privacy:metadata:accesspanel_backend:ip_address'] = 'La dirección IP de la sesión.';
$string['privacy:metadata:accesspanel_backend:accessibility_settings'] = 'Las preferencias de accesibilidad elegidas (contraste, tamaño y tipo de fuente).';
$string['privacy:metadata:accesspanel_backend:event_logs'] = 'Eventos de uso de la herramienta (perfiles aplicados, uso de lectura en voz alta, modo foco, etc.) usados para analítica.';
