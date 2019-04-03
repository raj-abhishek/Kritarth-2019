<?php
$db = mysqli_connect('148.72.88.29','kritarth','Kritarth@2019####','kritarth');
if(!$db){
    $message = 'DB error: '.mysqli_connect_error();
    echo "<script type='text/javascript'>alert('$message');window.location.href = '../index.html';</script>";
}

?>
