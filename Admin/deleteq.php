<?php require_once('php/connection.php'); ?>
<?php require_once('php/session.php'); ?>
<?php require_once('php/functions.php'); ?>
<?php
   $id = $_GET['id'];
   $sql = "DELETE FROM `Orders` WHERE `Orders`.`booking_id` = '$id'";
   $connection->query($sql);
   header("Location: index.php");
?>