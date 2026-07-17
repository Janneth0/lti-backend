<?php
// This file is part of Moodle - http://moodle.org/

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_accesspanel';
$plugin->version   = 2026071700;      // YYYYMMDDXX
$plugin->requires  = 2020061500;      // Moodle 3.9+
$plugin->maturity  = MATURITY_BETA;
$plugin->release   = '1.0.0';
// 1.0.0 -> Unificación Frontend (FARO) + Backend (API de accesibilidad):
//          onboarding persistente, saludo con nombre, ajustes y eventos
//          sincronizados contra el backend.
