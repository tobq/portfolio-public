<?php

$DOMAIN = 'akinyemi.uk';
$DOMAIN_LENGTH = strlen($DOMAIN);

$domain = $_SERVER['HTTP_HOST'];

$subdomain = substr($domain, 0, strlen($domain) - $DOMAIN_LENGTH - 1);
/**
 * @param $DOMAIN
 */
function redirect($DOMAIN)
{
    header("Location: http://tobi.$DOMAIN");
}

if (substr_compare($domain, $DOMAIN, -strlen($DOMAIN)) !== 0) {
    redirect($DOMAIN);
} else switch ($subdomain) {
    case "lope":
        header("Location: https://www.instagram.com/lopelocks");
        break;
    case "paul":
        header("Location: https://www.linkedin.com/in/paul-akinyemi-9b529776");
        break;
    case "cv.tobi":
    case "cv":
        header("Location: https://1drv.ms/w/s!AnLTraYGkdweklQBhTZ2c8wWwEJg");
        break;
    case "tobi":
        echo file_get_contents('index.html');
        break;
    default:
        redirect($DOMAIN);
};