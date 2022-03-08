<?php
error_reporting(0);
include('includes/db.php');
include ('includes/function.php');
include ('includes/header.php');




if(isset($_GET['page'])){
    $page=$_GET['page'];

}
else{
    $page=1;
}

$post_per_page=1;
$result = ($page-1)*$post_per_page;


//result

?>





   <?php include('includes/navbar.php');?>
   <div class="container"></div>
    <div class="container m-auto mt-12 row">
        <div class="col-2">
        <?php

        if(isset($_GET['search'])){
            $keyword = $_GET['search'];
            $postquery = "SELECT * FROM posts WHERE title LIKE '%$keyword%' ORDER BY id DESC LIMIT $result,$post_per_page";
        }else{
            $postquery = "SELECT * FROM posts  ORDER BY id DESC LIMIT $result, $post_per_page";
        }
        
        $runq = mysqli_query($conn,$postquery);
        while($post=mysqli_fetch_assoc($runq)){
?>
        
   <div class="row as_verticle_center">
          <div class="col-lg-12 col-md-12 col-sm-12">
          <a href="post.php?id=<?=$post['id']?> "style="text-decoration:none;color:black ">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="as_service_box text-center">
                  <span class="as_icon">
                  </span>

              <div class="col-md-12" style="background-image: url('images/<?=getposthumb($conn,$post['id'])?>');background-size: cover">
              </div>
              <a href=""
                    class="as_link">read more
                    <span>
              <div class="col-md-12">
                <div class="card-body">
                  <h5 class="card-title"><?= $post['title']?></h5>
                  <p class="card-text text-truncate "><?= $post['content']?></p>
                  <p class="card-text"><small class="text-muted">posted on<?= date('F jS, Y', strtotime($post['dt']))   ?> </small></p>
                </div>
              </div>
              </span>
                  </a>
                </div>
              </div>
            
            </div>
        </a>
          </div>
        <?php
        }
     
     ?>     
        
    </div>
    
   
          
   </div>
   </div>




    <?php
    if(isset($_GET['search'])){
        $keyword = $_GET['search'];
        $sql = "SELECT * FROM posts WHERE title LIKE '%$keyword%'";

    }else{
        $sql = "SELECT * FROM posts";

    }
    $result = mysqli_query($conn,$sql);
    $total_posts = mysqli_num_rows($result);
    $total_pages = ceil($total_posts/$post_per_page);

    
    
    
    
    ?>
   
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">

        <?php
        if($page>1){
            $switch="";
        }else{
            $switch="disabled";
        }

        if($page<$total_pages){
            $nswitch="";
        }else{
            $nswitch="disabled";
        }
        
        
        ?>
          <li class="page-item  <?=$switch?>">
            <a class="page-link"
            href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";} ?>page=<?= $page-1?>" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <?php
          for($opage=1;$opage<=$total_pages;$opage++){
              
              
              ?>
          <li class="page-item"><a class="page-link" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?>page=<?=$opage?>" ><?=$opage?></a></li>
              
          
        <?php
        
        }
          
          
          
          ?>




        
          <li class="page-item <?=$nswitch?>">
            <a class="page-link <?=$nswitch?>" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?>page=<?= $page+1?>">Next</a>
          </li>
        </ul>
      </nav>
      <?php include('includes/sidebar.php');?>
      
      <?php include('includes/footer.php');?>
