<?php
$servername = "anysql.itcollege.ee";
$username = "WT21";
$password = "i1FYLw54wV";

// Create connection
$link = mysqli_connect($servername, $username, $password);
mysqli_select_db($link, "WT21");
mysqli_query($link, "SET NAMES utf8");
