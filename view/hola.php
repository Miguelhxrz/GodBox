<?php
require_once('../model/connect_db.php');

$con = new connect_db;

$con->connect();

#$query_send = "INSERT INTO `users` (`username`, `password`, `id`, `email`, `address`) VALUES ('maria','12345678','29624053','mariapineda@gmail.com','lara')";

$con->add_instruc($query_send);

$question = $this->data_base->add_instruc($query_send);

?>