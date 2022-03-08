<?php
error_reporting(0);
require ('../includes/db.php');
require ('../includes/function.php');
if(!isset($_SESSION['isUserLoggedIn']) ){
  header('location:index.php');

}
$admin = getAdmininfo($conn,$_SESSION['email']);




?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>admil panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">blog admin panel</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

 

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

         <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a> End Notification Icon -->

   


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
           <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">-->
            <span class="d-none d-md-block dropdown-toggle ps-2"><?=$admin['username']?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin </h6>
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

          
            <li>
              <hr class="dropdown-divider">
            </li>

          
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../includes/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Add Posts</span>
        </a>
      </li><!-- End Dashboard Nav -->

     
      <li class="nav-item">
        <a class="nav-link " href="index.php?managepost">
          <i class="bi bi-grid"></i>
          <span>Manage posts</span>
        </a>
      </li><!-- End Dashboard Nav -->
        
          
        
        
       
    

     <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
         
        </ul>
      </li> End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link " href="index.php?managecategory">
          <i class="bi bi-grid"></i>
          <span>Manage category</span>
        </a>
      </li><!-- End Dashboard Nav -->
     
      <li class="nav-item">
        <a class="nav-link " href="index.php?managemenu">
          <i class="bi bi-grid"></i>
          <span>Manage menu</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
         
        </ul>
      </li>End Icons Nav -->
      <li class="nav-item">
        <a class="nav-link " href="logout.php">
          <i class="bi bi-grid"></i>
          <span>logout</span>
        </a>
      </li><!-- End Dashboard Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">



             
   <div class="row">
      <div class="col-lg-12 col-md-12">
        <?php
        if(isset($_GET['managepost'])){
      
          
          ?>

<div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">posts</h5>

    <!-- Vertical Form -->
    <form  role="form" method="post" action="../includes/addct.php"class="row g-3" >
      <div class="col-12">
        <label for="new_cat" class="form-label">Category name</label>
        <input type="text" class="form-control" name="new_cat" id="new_cat">
      </div>
        <div class="text-center">
        <button type="submit" name="addct" class="btn btn-primary">Add</button>
       
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>
      


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">posts 
            
            </h5>

              <!-- Default Table -->
                 
              <table class="table">
              <tbody>
              <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"> post title</th>
                    <th scope="col"> post category</th>

                    <th scope="col"> post Date</th>

                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <?php
                $post =getallpost($conn);
                $count=1;
                foreach($post as $post){
              
                  ?>
                    <tr>
                    <th scope="row"><?=$count?></th>
                    <td><?=$post['title']?></td>
                    <td><?=getcategory($conn,$post['category_id'])?></td>
                    <td><?= date('F jS, Y', strtotime($post['dt']))   ?></td>


                    <td>
                  <div class="brn-group">
                    
                    <a class="btn btn-danger" href="../includes/removepost.php?id=<?=$post['id']?>">Remove<i class="icon_close_alt2"></i></a>
                    
       
                  </td>
                  
                  </tr>

                  <?php
                  $count++;

                }
                
                
                ?>
               
                 
              
        
               
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
            </div>


<?php



        }else if(isset($_GET['managemenu'])){
          ?>
                    <div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">add new menu</h5>

    <!-- Vertical Form -->
    <form  role="form" method="post" action="../includes/addmenu.php"class="row g-3" >
      <div class="col-12">
        <label for="new_menu" class="form-label">menu name</label>
        <input type="text" class="form-control" name="new_menu" id="new_menu">
      </div>

      <div class="col-12">
        <label for="new_link" class="form-label">link</label>
        <input type="text" class="form-control" name="new_link" id="new_link">
      </div>
        <div class="text-center">
        <button type="submit" name="addmenu" class="btn btn-primary">Add</button>
       
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>

<div class="card">
            <div class="card-body">
              <h5 class="card-title">menu - <a href="#myModal" data-toggle="modal" class=" ">
             add new menu/addnew sub menu
            
            </h5></a>

            

              <!-- Default Table -->
                 
              <table class="table">
              <tbody>
              <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"> menu</th>
                    <th scope="col"> link</th>

                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <?php
                $menus =getmenu($conn);
                $count=1;
                foreach($menus as $me){
              
                  ?>
                    <tr>
                    <th scope="row"><?=$count?></th>
                    <td><?=$me['name']?></td>
                    <td><?=$me['action']?></td>

                    <td>
                  <div class="brn-group">
                    
                    <a class="btn btn-danger" href="../includes/removemenu.php?id=<?=$me['id']?>">Remove<i class="icon_close_alt2"></i></a>
                    
       
                  </td>
                  
                  </tr>

                  <?php
                  $count++;

                }
                
                
                ?>
               
                 
              
        
               
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
          


<div class="card">
  <div class="card-body">
    <h5 class="card-title">add new submenu</h5>

    <!-- Vertical Form -->
    <form  role="form" method="post" action="../includes/addmenu.php"class="row g-3" >
      <div class="col-12">
        <label for="new_submenu" class="form-label">submenu name</label>
        <input type="text" class="form-control" name="new_submenu" id="new_submenu">
      </div>
      <div class="col-12">
        <label for="new_parentid" class="form-label">select parent menu</label>
        <select  class="form-control" name="new_parentid" id="new_parentid">
            <?php
            
            $mlist = getallmenu($conn);
            foreach($mlist as $m){
              ?>

  
<option value="<?=$m['id']?>"><?=$m['name']?></option>

<?php
            }
            
            
            ?>
        
      
      
      </select>
      </div>
      <div class="col-12">
        <label for="new_link1" class="form-label"> submenulink</label>
        <input type="text" class="form-control" name="new_link1" id="new_link1">
      </div>
        <div class="text-center">
        <button type="submit" name="addsubmenu" class="btn btn-primary">Add</button>
       
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>

<div class="card">
            <div class="card-body">
              <h5 class="card-title">submenu - <a href="#myModal" data-toggle="modal" class=" ">
             add new submenu
            
            </h5></a>

            

              <!-- Default Table -->
                 
              <table class="table">
              <tbody>
              <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"> submenu</th>

                    <th scope="col"> parent menu</th>
                    <th scope="col"> link</th>

                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <?php
                $submenus =getallsubmenu($conn);
                $count=1;
                foreach($submenus as $sme){
              
                  ?>
                    <tr>
                    <th scope="row"><?=$count?></th>
                    <td><?=$sme['name']?></td>
                    <td><?=getmenuname($conn,$sme['parent_menu_id'])?></td>
                    <td><?=$sme['action']?></td>

                    <td>
                  <div class="brn-group">
                    
                    <a class="btn btn-danger" href="../includes/removesubmenu.php?id=<?=$sme['id']?>">Remove<i class="icon_close_alt2"></i></a>
                    
       
                  </td>
                  
                  </tr>

                  <?php
                  $count++;

                }
                
                
                ?>
               
                 
              
        
               
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

       




<?php
          
        }
        else if(isset($_GET['managecategory'])){
          ?>
          <div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">add new categories</h5>

    <!-- Vertical Form -->
    <form  role="form" method="post" action="../includes/addct.php"class="row g-3" >
      <div class="col-12">
        <label for="new_cat" class="form-label">Category name</label>
        <input type="text" class="form-control" name="new_cat" id="new_cat">
      </div>
        <div class="text-center">
        <button type="submit" name="addct" class="btn btn-primary">Add</button>
       
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>
      


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">category - <a href="#myModal" data-toggle="modal" class=" ">
             add new categories
            
            </h5></a>

              <!-- Default Table -->
                 
              <table class="table">
              <tbody>
              <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"> category Name</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <?php
                $categories =getAllcategory($conn);
                $count=1;
                foreach($categories as $ct){
              
                  ?>
                    <tr>
                    <th scope="row"><?=$count?></th>
                    <td><?=$ct['name']?></td>
                    <td>
                  <div class="brn-group">
                    
                    <a class="btn btn-danger" href="../includes/removect.php?id=<?=$ct['id']?>">Remove<i class="icon_close_alt2"></i></a>
                    
       
                  </td>
                  
                  </tr>

                  <?php
                  $count++;

                }
                
                
                ?>
               
                 
              
        
               
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
<?php
        }else{
          ?>
          
   <div class="card">
      <div class="card-body">
         <h5 class="card-title">ADD POSTS</h5>
         <div class="panel-body">
            <div class="form">
               <form action="../includes/addpost.php" method="post" enctype="multipart/form-data"class="form-horizontal">
                  <div class="form-group">
                     <div class="col-sm-12">
                        <label>POST TITLE</label>
                        <!-- TinyMCE Editor -->
                        <input type="text" class="tinymce" name="post_title" required >
                        <!-- End TinyMCE Editor -->
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-12">
                        <!-- TinyMCE Editor -->
                        <label>POST CONTENT</label>
                        <textarea class="tinymce-editor" name="post_content" rows="6"  required >
                
                             </textarea>
                        <!-- End TinyMCE Editor -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col-sm-6">
                        <div class="col-sm-12">
                           <label>SELECT POST CATEGORY</label>
                           <select name = "post_category"class="form-control"  required  >
                              <?php
                                 $categories = getAllcategory($conn);
                                 foreach($categories as $ct){
                                  ?>
                              <option value="<?=$ct['id']?>"><?=$ct['name']?></option>
                              <?php
                                 }
                                  
                                  ?>
                           </select>
                        </div>
                     </div>
                     <div class="form-group col-sm-6">
                        <div class="col-sm-12">
                           <label>upload photos(max 5)</label>
                           <input type="file" class="form-control" name="post_image[]" accept="image/*" multiple   />
                        </div>
                     </div>
                  </div>
                  <input type="submit" name="addpost" class="btn btn-primary" value="add post">  
               </form>
            </div>
         </div>
      </div>
   </div>
   </div>
   </div>


<?php
        }
        
        
        ?>
 

            <!-- Customers Card 
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div> End Customers Card -->

            <!-- Reports
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales 
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>$64</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>$47</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                        <td>$147</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td>$67</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                        <td>$165</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>End Recent Sales -->

            <!-- Top Selling 
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Top Selling <span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>$46</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>$59</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>$32</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div> End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity 
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div> End activity item

                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div> End activity item

              </div>

            </div>
          </div>End Recent Activity -->

          <!-- Budget Report 
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Budget Report <span>| This Month</span></h5>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Sales',
                          max: 6500
                        },
                        {
                          name: 'Administration',
                          max: 16000
                        },
                        {
                          name: 'Information Technology',
                          max: 30000
                        },
                        {
                          name: 'Customer Support',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div> End Budget Report -->

          <!-- Website Traffic 
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div> End Website Traffic -->

          <!-- News & Updates Traffic
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div> End sidebar recent posts

            </div>
          </div> End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= 
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. 
      <!-- You can delete the links only if you purchased the pro version. 
      <!-- Licensing information: https://bootstrapmade.com/license/ 
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ 
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer> End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!--SCRIPTS - MAKE SURE THE PATH IS RIGHT FOR THE BOOTSTRAP SCRIPTS-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"> </script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script

</body>

</html>