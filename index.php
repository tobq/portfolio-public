<?php

$str = "/index.html";
switch (explode('.', $_SERVER['HTTP_HOST'])[0]) {
    case "lope":
        $str = "https://www.instagram.com/lopelocks";
    case "paul":
        $str = "https://www.linkedin.com/in/paul-akinyemi-9b529776";
};


header("Location: $str");
