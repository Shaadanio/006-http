<?php
if(isset($_GET['text'])){
    $text = $_GET['text'];
    header('Content-Disposition: attachment; filename="text.txt"');
    echo $text;
    exit();
}