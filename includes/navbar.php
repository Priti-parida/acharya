


<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <?php

$navquery = "SELECT * FROM menu";
$runav = mysqli_query($conn,$navquery);
while($menu=mysqli_fetch_assoc($runav)){
 $no = getsubmenuno($conn,$menu['id']);
 if(!$no){
  ?>
<li class="nav-item">
                <a class="nav-link " aria-current="page" href="<?=$menu['action']?>"><?=$menu['name']?></a>
                </li>
<?php
}
else{
  ?>

<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=$menu['action']?>" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?=$menu['name']?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  
                <?php
                $submenu =   getsubmenu($conn,$menu['id']);
                foreach ($submenu as $sm) {
                  # code...
                  ?>
  <li><a class="dropdown-item" href="<?=$sm['action']?>"><?=$sm['name']?></a></li>
                
                  <?php
                }
                
                
                ?>
                
              
                </ul>
              </li>



<?php
}
?>





<?php
}
?>






         
           
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success"  name="submit" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav> 
     
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-top" style="background-color: darkred;">
          <div class="container m-auto" >
            <a href="#" class="m-auto" style="text-decoration: none;"></a>
          </div>
        </nav>