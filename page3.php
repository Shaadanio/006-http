<?php 
session_start();

if(!isset($_SESSION['page_views'])){
    $_SESSION['page_views'] = 1;
} else {
    $_SESSION['page_views']++;
}
if($_SESSION['page_views'] % 3 == 0){
    header("Location: page4.php");
}