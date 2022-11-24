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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <?php
                    $query= "SELECT * FROM aboutus";
                    $result= mysqli_query($conn, $query);
                    $data2=$result->fetch_assoc();

                    ?>
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="<?php echo "admin/uploads/".$data2['abimg1'];?>">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="<?php echo "admin/uploads/".$data2['abimg2'];?>" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="<?php echo "admin/uploads/".$data2['abimg3'];?>">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="<?php echo "admin/uploads/".$data2['abimg4'];?>">
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <?php
                    $query= "SELECT * FROM aboutus";
                    $result= mysqli_query($conn, $query);
                    $data=$result->fetch_assoc();

                    ?>
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">
                            <?php echo $data['ab_title'];?></h5>
                        <h1 class="mb-4"><?php echo $data['ab_subtitle'];?></h1>
                        <p class="mb-4"><?php echo $data['ab_desc'];?></p>
                        <div class="row g-4 mb-4">
                            <?php
                        $query= "SELECT * FROM aboutus";
                        $result= mysqli_query($conn, $query);
                        while($data1=mysqli_fetch_array($result)){
                            ?>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                                        <?php echo $data1['year'];?>
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0"><?php echo $data1['exp'];?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                        </div>

                        <a class="btn btn-primary py-3 px-5 mt-2" href=""><?php echo $data['buttonname'];?></a>
                    </div>

                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <?php 
                    $query= "SELECT * FROM teammember";
                    $result= mysqli_query($conn, $query);
                    $data=$result->fetch_assoc();

                    ?>
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">
                        <?php echo $data['tm_title']; ?></h5>
                    <h1 class="mb-5"><?php echo $data['tm_subtitle']; ?></h1>
                </div>
                <div class="row g-4">
                    <?php
                     $query= "SELECT * FROM teammember limit 4";
                     $result= mysqli_query($conn, $query);
                    while($data1=mysqli_fetch_array($result)){
                        ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="<?php echo "admin/uploads/". $data1['tm_img']; ?>" alt="">
                            </div>
                            <h5 class="mb-0"><?php echo $data1['fullname']; ?></h5>
                            <small><?php echo $data1['designation']; ?></small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="<?php echo $data1['fb_link']?>"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="<?php echo $data1['twitter_link']?>"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="<?php echo $data1['insta_link']?>"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php

                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <?php  include('inc/footer.php');  ?>