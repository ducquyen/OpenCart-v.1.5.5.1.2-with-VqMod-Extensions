<?php
// HTTP
define('HTTP_SERVER', 'http://cfe.by.local/admin/');
define('HTTP_CATALOG', 'http://cfe.by.local/');

// HTTPS
define('HTTPS_SERVER', 'http://cfe.by.local/admin/');
define('HTTPS_CATALOG', 'http://cfe.by.local/');

// DIR
define('DIR_APPLICATION', $_SERVER['DOCUMENT_ROOT'] . '/admin/');
define('DIR_SYSTEM', $_SERVER['DOCUMENT_ROOT'] . '/system/');
define('DIR_DATABASE', $_SERVER['DOCUMENT_ROOT'] . '/system/database/');
define('DIR_LANGUAGE', $_SERVER['DOCUMENT_ROOT'] . '/admin/language/');
define('DIR_TEMPLATE', $_SERVER['DOCUMENT_ROOT'] . '/admin/view/template/');
define('DIR_CONFIG', $_SERVER['DOCUMENT_ROOT'] . '/system/config/');
define('DIR_IMAGE', $_SERVER['DOCUMENT_ROOT'] . '/image/');
define('DIR_CACHE', $_SERVER['DOCUMENT_ROOT'] . '/system/cache/');
define('DIR_DOWNLOAD', $_SERVER['DOCUMENT_ROOT'] . '/download/');
define('DIR_LOGS', $_SERVER['DOCUMENT_ROOT'] . '/system/logs/');
define('DIR_CATALOG', $_SERVER['DOCUMENT_ROOT'] . '/catalog/');



// DB
define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'euro_clothing');
define('DB_PREFIX', 'oc_');

//Product weight id (oc_attribute.attribute_id / oc_attribute_description = 'Вес изделия в граммах')
define('PRODUCT_WEIGHT_ID', '4');