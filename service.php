<?php  include('inc/header.php');?>

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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <?php
                    $query= "SELECT * FROM services";
                    $result= mysqli_query($conn, $query);
                    $data=$result->fetch_assoc();

                    ?>
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">
                        <?php echo $data['service_title'];?></h5>
                    <h1 class="mb-5"><?php echo $data['service_subtitle'];?></h1>
                </div>
                <div class="row g-4">
                    <!-- pagination -->
                    <?php
                            $limit = 4;  // Number of entries to show in a page. Look for a GET variable page if not found default is 1.     
                            if (isset($_GET["page"])) { 
                            $pn  = $_GET["page"]; 
                            } 
                            else { 
                            $pn=1; 
                            };  
                        
                            $start_from = ($pn-1) * $limit;  
                        
            $sql = "SELECT * FROM services order by id DESC  LIMIT $start_from, $limit";  
                        $result= mysqli_query($conn, $sql);
                        while($data1=mysqli_fetch_array($result)){
                            ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">

                            <div class="p-4">
                                <img class="im" src="<?php echo "admin/uploads/".$data1['icon'];?>" alt="">
                                <h5><?php echo $data1['feature_title'];?></h5>
                                <p><?php echo $data1['description'];?></p>
                            </div>

                        </div>
                    </div>
                    <?php 
                        }
                        ?>
                </div>

            </div>
        </div>
        <!-- Service End -->

        <!-- pagination -->
        <div class="pagination-section col-lg-1 m-auto">
            <ul class="pagination">
                <?php  
                            $sql = "SELECT COUNT(*) FROM services";  
                            $rs_result = mysqli_query($conn, $sql);  
                            $row = mysqli_fetch_row($rs_result);  
                            $total_records = $row[0];  
                                
                            // Number of pages required.
                            $total_pages = ceil($total_records / $limit);  
                            $pagLink = "";                        
                            for ($i=1; $i<=$total_pages; $i++) {
                                if ($i==$pn) {
                                    $pagLink .= "<li class='active'><a href='service.php?page="
                                                                    .$i."' style='padding:15px; font-size:25px;'>".$i."</a></li>";
                                }            
                                else  {
                                    $pagLink .= "<li><a href='service.php?page=".$i."'style='padding:15px; font-size:25px;'>
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