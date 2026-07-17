<?php
namespace local_accesspanel\privacy;

defined('MOODLE_INTERNAL') || die();

/**
 * A diferencia de la version anterior (FARO standalone), este plugin ahora
 * SI envia datos a un sistema externo (el backend de accesibilidad): el id
 * de usuario de Moodle, id de curso, eventos de uso e IP/user-agent para la
 * sesion. Por eso declaramos un external_location_provider en lugar de
 * null_provider.
 *
 * TODO: implementar request\plugin\provider (export_user_data /
 * delete_data_for_user) llamando a los endpoints del backend una vez que
 * este exponga borrado/exportacion por usuario (hoy no lo hace).
 */
class provider implements
    \core_privacy\local\metadata\provider {

    public static function get_metadata(\core_privacy\local\metadata\collection $collection): \core_privacy\local\metadata\collection {
        $collection->add_external_location_link(
            'accesspanel_backend',
            [
                'moodle_user_sub'  => 'privacy:metadata:accesspanel_backend:moodle_user_sub',
                'moodle_course_id' => 'privacy:metadata:accesspanel_backend:moodle_course_id',
                'user_agent'       => 'privacy:metadata:accesspanel_backend:user_agent',
                'ip_address'       => 'privacy:metadata:accesspanel_backend:ip_address',
                'accessibility_settings' => 'privacy:metadata:accesspanel_backend:accessibility_settings',
                'event_logs'       => 'privacy:metadata:accesspanel_backend:event_logs',
            ],
            'privacy:metadata:accesspanel_backend'
        );

        return $collection;
    }
}
