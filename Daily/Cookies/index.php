<?php
echo $_COOKIE['myCookie'];
if(isset($_COOKIE['myCookie'])) {
    echo "hello Wordl";
} else {
    setcookie("myCookie","myCookieVlaue",time()+7200);
}