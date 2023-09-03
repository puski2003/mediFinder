<?php
require "connection.php";

$cid = $_POST["citId"];
$txt = $_POST["text"];

$crs = Database::search("SELECT * FROM ``");
?>