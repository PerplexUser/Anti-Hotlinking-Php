<?php

if ($_SERVER['HTTP_REFERER'] == "https://www.domain.test/index.php") {

if ($_GET["id"] == "1") {
header('location: /secret/path/1234/super.zip');
exit();
}

if ($_GET["id"] == "2") {
header('location: /secret/path/1234/mega.zip');
exit();
}

if ($_GET["id"] == "3") {
header('location: /secret/path/1234/cool.zip');
exit();
}

} else {header('location: https://www.domain.test/');
exit();
}
?>