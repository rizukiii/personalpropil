<?php 

$query = "SELECT * FROM `tb_about` WHERE id=1 LIMIT 1";

$result = $connect->query($query);

$about = $result->fetch_object();

if(!$about){
    die ("Data Tidak Ada!");
}
