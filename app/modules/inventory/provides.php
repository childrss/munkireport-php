<?php

return array(
    'client_tabs' => array(
        'inventory-items' => array(
            'view' => 'inventory_items_tab',
            'i18n' => 'inventory.inventory_items',
            'badge' => 'inventory-cnt'
        ),
    ),
    'listings' => array(
        'inventory' => array('view' => 'inventory_listing', 'i18n' => 'inventory.listing',),
    ),
    'widgets' => array(
        'app' => array('view' => 'app_widget', 'icon' => 'fa-tachometer'),
    ),
    'reports' => array(
        'appVersions' => array('view' => 'appVersions', 'i18n' => 'inventory.appversions_report',),
    )
);
