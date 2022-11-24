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
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <?php
                        $query= "SELECT * FROM home";
                        $result= mysqli_query($conn, $query);
                        $data=$result->fetch_assoc();
                        ?>
                            <h1 class="display-3 text-white animated slideInLeft"><?php echo $data['intro_title'];?>
                            </h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2"><?php echo $data['intro_desc'];?></p>
                            <a href=""
                                class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"><?php echo $data['btnname'];?></a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="<?php echo "admin/uploads/".$data['intro_img'];?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <?php
                    $query= "SELECT * FROM services limit 4";
                    $result= mysqli_query($conn, $query);
                    $data=$result->fetch_assoc();

                    ?>
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">
                        <?php echo $data['service_title'];?></h5>
                    <h1 class="mb-5"><?php echo $data['service_subtitle'];?></h1>
                </div>
                <div class="row g-4">
                    <?php
                        $query= "SELECT * FROM services limit 4";
                        $result= mysqli_query($conn, $query);
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
                     $query= "SELECT * FROM menu";
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
                                <?php
                                    $query= "SELECT * FROM menu";
                                    $result= mysqli_query($conn, $query);
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


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <?php 
                    $query= "SELECT * FROM booking";
                    $result= mysqli_query($conn, $query);
                    $data=$result->fetch_assoc();

                    ?>
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src=""
                            data-bs-target="#videoModal">
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">
                            <?php echo $data['title'];?></h5>
                        <h1 class="text-white mb-4"><?php echo $data['btnname'];?></h1>

                        <?php 
                         if (isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $date = $_POST['date'];
                            $people = $_POST['people'];
                            $request = $_POST['request'];
                      
                      
                           $query = "INSERT INTO booking(name, email, date, people, request) VALUES ('$name','$email','$date','$people','$request') ";
                           $result = mysqli_query($conn, $query);
                          if ($result) {
                              echo "<meta http-equiv=\"refresh\" content=\"20;URL=index.php\">";
                        
                              ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            <strong>Your booking has been requested </strong>
                        </div>

                        <?php
                              }
                              else {
                                  echo "Error: " . $query . "<br>" . mysqli_error($conn);
                              }
                            
                          }
                      ?>
                        <form enctype="multipart/form-data" method="POST" action="#">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Your Name">
                                        <label for="name">Your name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime"
                                            name="date" placeholder="Date & Time" data-target="#date3"
                                            data-toggle="datetimepicker" />
                                        <label for="date">Date </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating" data-target-input="nearest">
                                        <input type="text" class="form-control" id="people" name="people"
                                            placeholder="Number of People">
                                        <label for="people">Number of People</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message"
                                            name="request" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Book
                                        Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe width="700" height="450" data-bs-target="#videoModal"
                                src="<?php echo $data['Video'];?>" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->


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

    <!-- Testimonial start -->
    <!-- Carousel wrapper -->
    <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
        <div class="carousel-inner">
            <?php
                     $query5= "SELECT * FROM testimonial";
                     $result5= mysqli_query($conn, $query5);
                    while ($data5=mysqli_fetch_array($result5)) {
                        ?>

            <div class="carousel-item active">
                <img class="rounded-circle shadow-1-strong mb-4" src="<?php echo "admin/uploads/".$data5['photo'];?>"
                    alt="avatar" style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3"><?php echo $data5['name'];?></h5>
                        <p><?php echo $data5['profession'];?></p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            <?php echo $data5['message'];?>
                        </p>
                    </div>
                </div>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                </ul>
            </div>
            <?php
        }?>
        </div>
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->
    <!-- Testimonial end -->


    <!-- Footer Start -->
    <?php  include('inc/footer.php');  ?>