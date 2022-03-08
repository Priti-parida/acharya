<?php
error_reporting(0);

include('includes/db.php');
include('includes/function.php');
include('includes/header.php');




?>


<?php include('includes/navbar.php');?>
<div>
    <div class="container m-auto mt-12 row">
        <div class="col-12">
            <?php
            $post_id = $_GET['id'];
            $postquery = "SELECT * FROM posts WHERE id=$post_id";
            $runq = mysqli_query($conn,$postquery);
            $post=mysqli_fetch_assoc($runq);


            ?>
            <div class="card mb-3">
                
                <div class="card-body">
                  <h5 class="card-title"><?=$post['title']?></h5>
                  <span class="badge bg-primary ">posted on<?= date('F jS, Y', strtotime($post['dt']))   ?></span>
                  <span class="badge bg-danger"><?=getcategory($conn,$post['category_id'])?></span> <!--for category-->
                  <div class="border-bottom mt-3"></div>
                  
                  <?php
                  
                 $post_image = getimagebypost($conn,$post['id']);
                  
                  ?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
      <?php
         //for active slide in crousel $c=1;
         
         foreach($post_image as $image){
           
             ?>
      <div class="carousel-item active "> 
         <img  src="images/<?=$image['image']?>" class="d-block w-100" alt="">
      </div>
      <?php
         }
         
         
         ?>
   </div>
</div>


          <!--<img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" class="img-fluid mb-2 mt-2" alt="Responsive image">-->
                  <p class="card-text text-truncate"><?=$post['content']?>
                  </p>
                  <div class="addthis_inline_share_toolbox_fvh0"></div>

                  <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  comments on this
</button>-->

                </div>
              </div>
        
              
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
      <?php
         //for active slide in crousel $c=1;
         
         foreach($post_image as $image){
           
             ?>
      <div class="carousel-item active "> 
         <img  src="images/<?=$image['image']?>" class="d-block w-100" alt="">
      </div>
      <?php
         }
         
         
         ?>
   </div>
</div>


   
     


   </div>



   <div>
    <div class="container m-auto mt-12 row">
        <div class="col-12">
            <?php
            $post_id = $_GET['id'];
            $postquery = "SELECT * FROM posts WHERE id=$post_id";
            $runq = mysqli_query($conn,$postquery);
            $post=mysqli_fetch_assoc($runq);


            ?>
            <div class="card mb-3">
                
                <div class="card-body">
                  <h5 class="card-title"><?=$post['title']?></h5>
                  <span class="badge bg-primary ">posted on<?= date('F jS, Y', strtotime($post['dt']))   ?></span>
                  <span class="badge bg-danger"><?=getcategory($conn,$post['category_id'])?></span> <!--for category-->
                  <div class="border-bottom mt-3"></div>
                  
                  <?php
                  
                 $post_image = getimagebypost($conn,$post['id']);
                  
                  ?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
      <?php
         //for active slide in crousel $c=1;
         
         foreach($post_image as $image){
           
             ?>
      <div class="carousel-item active "> 
         <img  src="images/<?=$image['image']?>" class="d-block w-100" alt="">
      </div>
      <?php
         }
         
         
         ?>
   </div>
</div>


          <!--<img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" class="img-fluid mb-2 mt-2" alt="Responsive image">-->
                  <p class="card-text text-truncate"><?=$post['content']?>
                  </p>
                  <div class="addthis_inline_share_toolbox_fvh0"></div>

                  <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  comments on this
</button>-->

                </div>
              </div>
        
              
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
      <?php
         //for active slide in crousel $c=1;
         
         foreach($post_image as $image){
           
             ?>
      <div class="carousel-item active "> 
         <img  src="images/<?=$image['image']?>" class="d-block w-100" alt="">
      </div>
      <?php
         }
         
         
         ?>
   </div>
</div>


   
     


   </div>


 





        
  

















        </div>
<div class="row">
            <div>
                  <h4>Related Posts</h4>


                  <?php
                  
                  $pquery = "SELECT * FROM posts WHERE category_id={$post['category_id']} ORDER BY id DESC";
                  $prun = mysqli_query($conn,$pquery);
                  while($rpost=mysqli_fetch_assoc($prun)){
                    if($rpost['id']==$post_id){
                      continue;
                    }
                    ?>


<a href="post.php?id=<?=$rpost['id']?>"style="text-decoration:none" color="black">

          <div class="card mb-3" style="max-width: 700px;">
                    <div class="row g-0">
                      <div class="col-md-5" style="background-image: url('https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg');background-size: cover">
                        <!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="..."> -->
                      </div>
                      
                 
                  <div class="card mb-3" style="max-width: 700px;">
                    <div class="row g-0">
                      <div class="col-md-5" style="background-image: url('https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg');background-size: cover">
                        <!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="..."> -->
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h5 class="card-title"><?=$rpost['title']?></h5>
                          <p class="card-text text-truncate"><?=$rpost['content']?></p>
                          <p class="card-text"><small class="text-muted">posted on<?= date('F jS, Y', strtotime($rpost['dt']))   ?> </small></p>
                        </div>
                      </div>
                    </div>

                  </a>

        <?php

 

                  }
                  
                  ?>



</div>
</div>
        
    </div>
    <?php include('includes/sidebar.php');?>
   
    </div>

      
    <?php include('includes/footer.php');?>
   