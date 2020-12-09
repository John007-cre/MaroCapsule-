<?php
// HTTP
define('HTTP_SERVER', 'https://marocapsule.herokuapp.com/upload/');

// HTTPS
define('HTTPS_SERVER', 'https://marocapsule.herokuapp.com/upload/');

// DIR
define('DIR_APPLICATION', 'MaroCapusle/upload/catalog/');
define('DIR_SYSTEM', 'MaroCapusle/upload/system/');
define('DIR_IMAGE', 'MaroCapusle/upload/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'ec2-3-224-97-209.compute-1.amazonaws.com');
define('DB_USERNAME', 'dxalpactvbkuza');
define('DB_PASSWORD', '960d145bbc10c37c0af302da97e4cda792eaf039223bdf9041401a4b9ca46a65');
define('DB_DATABASE', 'd6l1m1k7v428a7');
define('DB_PORT', '5432');
define('DB_PREFIX', 'oc_');