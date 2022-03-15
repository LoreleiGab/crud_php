<?php
function siteURL($sistema): string
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = "{$_SERVER['HTTP_HOST']}/$sistema";
    return $protocol.$domainName;
}
define('SERVERURL', siteURL("crud_php/"));
define('NOMESIS', "Crud");
date_default_timezone_set('America/Fortaleza');
ini_set('session.gc_maxlifetime', 60*60); // 60 minutos