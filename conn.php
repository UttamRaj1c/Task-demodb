<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'demodb');

if($con){
    echo "connected";
}
else{
    echo " not conneted";
}

?>