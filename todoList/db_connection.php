<?php

$conn = mysqli_connect('localhost','root','','todo_list');

if(!$conn){
    echo "connection fail ..." . mysqli_connect_error();
}
