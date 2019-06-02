<?php

switch (explode('.', $_SERVER['HTTP_HOST'])[0]) {
    case "lope":
        $str = "https://www.instagram.com/lopelocks";
        break;
    case "paul":
        $str = "https://www.linkedin.com/in/paul-akinyemi-9b529776";
        break;
    case "cv":
        $str = "https://1drv.ms/w/s!AnLTraYGkdweklQBhTZ2c8wWwEJg";
        break;
    default:
        $str = "/index.html";
};


header("Location: $str");
