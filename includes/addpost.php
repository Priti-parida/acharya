<?php
require('db.php');

if(isset($_POST['addpost'])){
   $ptitle = mysqli_real_escape_string($conn,$_POST['post_title']);
   $pcontent = mysqli_real_escape_string($conn,$_POST['post_content']);
   $pcid=$_POST['post_category'];
   $query = "INSERT INTO posts (title,content,category_id) VALUES ('$ptitle','$pcontent',$pcid)";
   $run = mysqli_query($conn,$query);
   $post_id = mysqli_insert_id($conn);
   //echo '<PRE>';
 
   $image_name = $_FILES['post_image']['name'];
   $img_tmp = $_FILES['post_image']['tmp_name'];

   foreach($image_name as $index=>$img){
       if(move_uploaded_file($img_tmp[$index] ,"../images/$img")){
        $query = "INSERT INTO images (post_id,image) VALUES ($post_id,'$img')";
        $run = mysqli_query($conn,$query);

       }
   }

header('location:../adminblog/index2.php?managepost');

}


?>