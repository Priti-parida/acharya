
<?php
require 'db.php';
if(isset($_POST['addmenu'])){
    //print_r($_POST);
$menu_name=mysqli_real_escape_string($conn,$_POST['new_menu']);
$menu_link=mysqli_real_escape_string($conn,$_POST['new_link']);

$query = "INSERT INTO menu(name,action) VALUES ('$menu_name','$menu_link')";
mysqli_query($conn,$query);
header('location:../admin/index.php?managemenu');
}





require 'db.php';
if(isset($_POST['addsubmenu'])){
    //print_r($_POST);
$submenu_name=mysqli_real_escape_string($conn,$_POST['new_submenu']);
$parent_id=mysqli_real_escape_string($conn,$_POST['new_parentid']);

$submenu_link=mysqli_real_escape_string($conn,$_POST['new_link1']);

$query = "INSERT INTO submenu(name,action,parent_menu_id) VALUES ('$submenu_name','$submenu_link','$parent_id')";
mysqli_query($conn,$query);
header('location:../admin/index.php?managemenu');
}



?>