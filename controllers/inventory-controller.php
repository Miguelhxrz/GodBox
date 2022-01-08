<?php
require_once('../model/user.php');
require_once('../model/box.php');
$box = new box;
$question = $box->ShowBoxes();
?>