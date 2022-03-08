<?php

function getcategory($conn,$id){
   $query ="SELECT  * FROM category WHERE id =$id";
   $run = mysqli_query($conn,$query);
   $data = mysqli_fetch_assoc($run);
   return $data['name'];
  
   

}


function getAllcategory($conn){
   $query ="SELECT  * FROM category ";
   $run = mysqli_query($conn,$query);
   $data = array();
   while($d=mysqli_fetch_assoc($run)){
      $data[]=$d;
   }
   return $data;
  
   

}



function getimagebypost($conn,$post_id){
    $query ="SELECT  * FROM images WHERE post_id =$post_id";
    $run = mysqli_query($conn,$query);
    $data = array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
    
   
 
 }


 
function getcomment($conn,$post_id){
   $query ="SELECT  * FROM comment WHERE post_id =$post_id";
   $run = mysqli_query($conn,$query);
   $data = array();
   while($d=mysqli_fetch_assoc($run)){
       $data[]=$d;
   }
   return $data;
   
  

}


 function getsubmenu($conn,$menu_id){
    $query ="SELECT  * FROM submenu WHERE parent_menu_id =$menu_id";
    $run = mysqli_query($conn,$query);
    $data = array();
   while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
 }


 


 
 function getsubmenuno($conn,$menu_id){
    $query ="SELECT  * FROM submenu WHERE parent_menu_id =$menu_id";
    $run = mysqli_query($conn,$query);
    return mysqli_num_rows($run);
 }
 
function getAdmininfo($conn,$email){
   $query = "SELECT * FROM adminlogin WHERE email = '$email'";
   $run = mysqli_query($conn,$query);
   $data = mysqli_fetch_assoc($run);
   return $data;
}


function getmenu($conn){
   $query ="SELECT  * FROM menu";
   $run = mysqli_query($conn,$query);
   $data = array();
  while($d=mysqli_fetch_assoc($run)){
       $data[]=$d;
   }
   return $data;
}



function getallsubmenu($conn){
   $query ="SELECT  * FROM submenu";
   $run = mysqli_query($conn,$query);
   $data = array();
  while($d=mysqli_fetch_assoc($run)){
       $data[]=$d;
   }
   return $data;
}

function getallmenu($conn){
   $query ="SELECT  * FROM menu";
   $run = mysqli_query($conn,$query);
   $data = array();
  while($d=mysqli_fetch_assoc($run)){
       $data[]=$d;
   }
   return $data;
}




function getmenuname($conn,$id){
   $query ="SELECT  * FROM menu WHERE id=$id";
   $run = mysqli_query($conn,$query);
   $data = mysqli_fetch_assoc($run);
 
   
   return $data['name'];
}

function getallpost($conn){
   $query ="SELECT  * FROM posts ORDER  BY id DESC";
   $run = mysqli_query($conn,$query);
   $data = array();
  while($d=mysqli_fetch_assoc($run)){
       $data[]=$d;
   }
   return $data;
}
//front imAGE
function getposthumb($conn,$id){
   $query = "SELECT * FROM images WHERE post_id= $id";
   $run = mysqli_query($conn,$query);
   $data = mysqli_fetch_assoc($run);
   return $data['image'];
}



?>