<?php

return array(
    'client_tabs' => array(
        'sophos-tab' => array('view' => 'sophos_client_tab', 'i18n' => 'sophos.sophos'),
    ),
    'listings' => array(
        'sophos' => array('view' => 'sophos_listing', 'i18n' => 'sophos.sophos'),
    ),
    'widgets' => array(
        'sophos_installs' => array('view' => 'sophos_installs_widget', 'i18n' => 'sophos.installs-widget', 'icon' => 'fa-crosshairs'),
        'sophos_product_versions' => array('view' => 'sophos_product_versions_widget', 'i18n' => 'sophos.product-versions-title', 'icon' => 'fa-crosshairs'),
        'sophos_engine_versions' => array('view' => 'sophos_engine_versions_widget', 'i18n' => 'sophos.engine-versions-title', 'icon' => 'fa-crosshairs'),
        'sophos_virus_data_versions' => array('view' => 'sophos_virus_data_versions_widget', 'i18n' => 'sophos.virus-data-versions-title', 'icon' => 'fa-crosshairs'),
        'sophos_user_interface_versions' => array('view' => 'sophos_user_interface_versions_widget', 'i18n' => 'sophos.user_interface_versions-title', 'icon' => 'fa-crosshairs'),
    ),
    'reports' => array(
        'sophos' => array('view' => 'sophos', 'i18n' => 'sophos.report'),
    ),
);
