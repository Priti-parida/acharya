
<?php
require 'db.php';
if(isset($_POST['addct'])){
$category_name=mysqli_real_escape_string($conn,$_POST['new_cat']);
$query = "INSERT INTO category(name) VALUES ('$category_name')";
mysqli_query($conn,$query);
header('location:../admin/index.php?managecategory');
}

?>