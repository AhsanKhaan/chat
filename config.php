<?php 
$SiteUrl = 'http://localhost/chat/';
$AssetsUrl = '/';
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('display_errors' , 'on');
$ProductName = 'Chat App';
$DevelopedBy = 'BMSAS TECHNOLOGIES';
$SoftwareHouseLink = 'https://bmsastech.com/';
$SubFolder = 'petsanimals/';
$ThemeFolder = 'themes/';

$servername = "localhost";
$username = "root";
$password = "";
$DBName = "chat";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $DBName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
