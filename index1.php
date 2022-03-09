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
   
   $post_per_page=4;
   $result = ($page-1)*$post_per_page;
   
   
   //result
   
   ?>





   







<?php include('includes/navbar.php');?>
   <div>
    <div class="container m-auto mt-12row">
        <div class="col-12">
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
        
        <div class="card mb-3" style="max-width: 800px;">
        <a href="post.php?id=<?=$post['id']?> "style="text-decoration:none;color:black ">
            <div class="row g-0">
              <div class="col-md-5" style="background-image: url('images/<?=getposthumb($conn,$post['id'])?>');background-size: cover">
                <!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="..."> -->
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <h5 class="card-title"><?= $post['title']?></h5>

                  <p class=" text-truncate " style="max-width:300px;><?= $post['title']?></p>
                  <p class="card-text"><small class="text-muted">posted on<?= date('F jS, Y', strtotime($post['dt']))   ?> </small></p>
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
   
      
      



<?php include('includes/footer.php');?>