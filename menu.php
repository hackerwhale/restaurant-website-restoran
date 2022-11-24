<?php  include('inc/header.php');  ?>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php  include('inc/navbar.php');  ?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <?php 
                    $query= "SELECT * FROM menu";
                    $result= mysqli_query($conn, $query);
                    $data=$result->fetch_assoc();

                    ?>
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">
                        <?php echo $data['menu_title'];?></h5>
                    <h1 class="mb-5"><?php echo $data['menu_subtitle'];?></h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <?php
                     $query= "SELECT * FROM menu limit 3";
                     $result= mysqli_query($conn, $query);
                    while($data1=mysqli_fetch_array($result)){
                        ?>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                                href="#tab-1">
                                <img class="img-fluid" src="<?php echo "admin/uploads/". $data1['logo'];?>" alt="">
                                <div class="ps-3">
                                    <small class="text-body"><?php echo $data1['text1'];?></small>
                                    <h6 class="mt-n1 mb-0"><?php echo $data1['text2'];?></h6>
                                </div>
                            </a>
                        </li>
                        <?php
                                }
                                ?>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <!-- pagination -->
                                <?php
                                    $limit = 4;  // Number of entries to show in a page. Look for a GET variable page if not found default is 1.     
                                     if (isset($_GET["page"])) { 
                                     $pn  = $_GET["page"]; 
                                } else { 
                                    $pn=1; 
                                };  
                                $start_from = ($pn-1) * $limit;  
                        
                                $sql = "SELECT * FROM menu order by id  LIMIT $start_from, $limit";  
                                 $result= mysqli_query($conn, $sql);
                                while($data2=mysqli_fetch_array($result)){
                                 ?>
                                <div class="col-lg-6">

                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded"
                                            src="<?php echo "admin/uploads/". $data2['food_img'];?>" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $data2['me_item'];?></span>
                                                <span class="text-primary">
                                                    <p>$<?php echo $data2['price'];?></p>
                                                </span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $data2['me_desc'];?></small>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        <!-- pagination -->
        <div class="pagination-section col-lg-1 m-auto">
            <ul class="pagination">
                <?php  
                            $sql = "SELECT COUNT(*) FROM menu";  
                            $rs_result = mysqli_query($conn, $sql);  
                            $row = mysqli_fetch_row($rs_result);  
                            $total_records = $row[0];  
                                
                            // Number of pages required.
                            $total_pages = ceil($total_records / $limit);  
                            $pagLink = "";                        
                            for ($i=1; $i<=$total_pages; $i++) {
                                if ($i==$pn) {
                                    $pagLink .= "<li class='active'><a href='menu.php?page="
                                                                    .$i."' style='padding:15px; font-size:25px;'>".$i."</a></li>";
                                }            
                                else  {
                                    $pagLink .= "<li><a href='menu.php?page=".$i."'style='padding:15px; font-size:25px;'>
                                                                    ".$i."</a></li>";  
                                }
                            };  
                            echo $pagLink;  
                            ?>
            </ul>
        </div>
        <!-- pagination -->


        <!-- Footer Start -->
        <?php  include('inc/footer.php');  ?>