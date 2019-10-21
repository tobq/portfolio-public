<?php

$DOMAIN = 'akinyemi.uk';
$DOMAIN_LENGTH = strlen($DOMAIN);

$domain = $_SERVER['HTTP_HOST'];

echo substr($domain, 0, strlen($domain) - $DOMAIN_LENGTH);
//
//switch (substr($domain, 0, strlen($domain) - $DOMAIN_LENGTH)) {
//    case "lope":
//        header("Location: https://www.instagram.com/lopelocks");
//        break;
//    case "paul":
//        header("Location: https://www.linkedin.com/in/paul-akinyemi-9b529776");
//        break;
//    case "cv":
//        header("Location: https://1drv.ms/w/s!AnLTraYGkdweklQBhTZ2c8wWwEJg");
//        break;
//    case "tobi":
//        echo file_get_contents('index.html');
//        break;
//    default:
//        header("Location: http://tobi.$DOMAIN");
//};
//
//
