<?php

require ('../includes/db.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query ="DELETE FROM `category` WHERE id = $id";
    mysqli_query($conn,$query);
    header('location:../admin/index.php?managecategory');
}

?>