<?php 
session_start();

echo "Количество открытий страницы: " . $_SESSION['page_views'];