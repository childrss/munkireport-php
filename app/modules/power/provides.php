<?php

return array(
    'client_tabs' => array(
        'power-tab' => array('view' => 'power_tab', 'i18n' => 'power.power'),
        'battery-tab' => array('view' => 'battery_tab', 'i18n' => 'power.battery'),
    ),
    'listings' => array(
        'batteries' => array('view' => 'batteries_listing', 'i18n' => 'power.battery'),
        'power' => array('view' => 'power_listing', 'i18n' => 'power.power'),
    ),
    'widgets' => array(
        array('view' => 'power_battery_condition_widget'),
        array('view' => 'power_battery_health_widget'),
    ),
    'reports' => array(
        'power' => array('view' => 'power', 'i18n' => 'power.report'),
    ),
);
