<?php
echo "about cookie";
echo "<br>";

setcookie('name', 'clap', time() + 24 * 3600);
//after 1 day, cookie will expired
//1 month = 24*3600*30
//check cookie exists
if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
};

//unset cookie
// setcookie('name', 'clap', time() - 24 * 3600);