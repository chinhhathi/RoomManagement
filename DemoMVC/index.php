<?php

// Đường dẫn tới hệ  thống
define('PATH_SYSTEM', __DIR__ .'/system');
define('PATH_APPLICATION', __DIR__ . '/admin');

// Lấy thông số cấu hình
//require (PATH_SYSTEM . '/config/config.php');

include_once PATH_SYSTEM . '/core/Common.php';

// Chương trình chính
load();
?>