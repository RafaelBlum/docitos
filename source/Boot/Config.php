<?php

/**
 * CONFIG PROJECT
*/
date_default_timezone_set("America/sao_paulo");
define("CONF_SITE_NAME", "Docitos confeitaria");
define("CONF_SITE_TITLE", "Criando sabores inesquecíveis para tornar seus dias mais gostosos!");
define("CONF_SITE_DESC", "Somos uma das mais tradicionais confeitarias de Porto Alegre, criando sabores inesquecíveis para tornar seus dias mais gostosos! Doces, salgados, bolos e tortas!");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "docitos.online");
define("CONF_URL_BASE", "https://www.docitos.online");
define("CONF_URL_TEST", "http://localhost/docitos");
define("CONF_URL_ADMIN", "/admin");

/**
 * CONFIG ADDRESS
 */
define("CONF_ADDR_STREET", "Av. Protásio Alves");
define("CONF_ADDR_NUMBER", "2022");
define("CONF_ADDR_COMPLEMENT", "Casa");
define("CONF_ADDR_CITY", "Porto Alegre");
define("CONF_ADDR_STATE", "RS");
define("CONF_ADDR_ZIPCODE", "90660-000");
define("CONF_ADDR_FONE", "(51) 55555-55555");
define("CONF_ADDR_EMAIL", "atendimento@docitos.online");

/**
 * DEVELOPER
 */
define("CONF_DEV_NAME", "Rafael Blum");

/**
 * CONFIG DATES
 */
define("CONF_DATE_BR", "d/m/Y");
define("CONF_DATE_APP", "Y-m-d");

/**
 * CONFIG ALERTS
 */
define("CONF_MESSAGE_CLASS", "message");
define("CONF_MESSAGE_SUCCESS", "success icon-check-square-o");
define("CONF_MESSAGE_WARNING", "warning icon-warning");
define("CONF_MESSAGE_ERROR", "error icon-warning");

/**
 * CONFIG PASSWORD
 */
define("CONF_PASSWORD_MIN_LEN", 8);
define("CONF_PASSWORD_MAX_LEN", 40);
define("CONF_PASSWORD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWORD_OPTION", ["cost" => 10]);

/**
 * CONFIG DB_MYSQL
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "database_docitos",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ],
]);

/**
 * CONFIG E-MAIL PHP_MAILER
 */
define("MAIL", [
    "host" => "smtp.hostinger.com",
    "port" => 465,
    "user" => "atendimento@docitos.online",
    "passwd" => "Xz1290@#$",
    "from_name" => "Corporatix",
    "from_email" => "suporte@corporatix.com.br",
    "sender" => ["name" => "Docitos", "address" => "atendimento@docitos.online"],
    "lang" => "br",
    "html" => true,
    "auth" => true,
    "secure" => "ssl",
    "charset" => "utf-8",
]);

/**
 * CONFIG VIEWS
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_THEME", "docitos");
define("CONF_VIEW_ADMIN", "admin");
define("CONF_VIEW_EXT", "php");

/**
 * CONFIG UPLOADRES [images, files, medias]
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * CONFIG IMAGE
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg"=> 75, "png"=> 5]);


/**
 * CONFIG SOCIAL OPTIMIZER
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@universocode");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@universocode");
define("CONF_SOCIAL_FACEBOOK_APP", "778733016074484");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "rafael.blum.3");
define("CONF_SOCIAL_FACEBOOK_PAGE", "rafael.blum.3");
define("CONF_SOCIAL_GOOGLE_PAGE", "...");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "...");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "rafablum_");
define("CONF_SOCIAL_YOUTUBE_PAGE", "universocode");









