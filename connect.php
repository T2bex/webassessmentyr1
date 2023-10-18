<?php
$conn = mysqli_connect('localhost', 'root', '', 'assignment_sheffield1');
if(!$conn)
{
    echo 'cannot connect to database server';
    exit;
}
?>