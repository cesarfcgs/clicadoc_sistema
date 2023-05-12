<?php
session_start();

if(!isset($_SESSION["cpf"])) {    
     header("Location: ./logout.php");
     exit;   
}