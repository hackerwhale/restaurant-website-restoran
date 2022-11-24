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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


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
                              echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
                        
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
                                    <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Book Now</button>
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


        <!-- Footer Start -->
        <?php  include('inc/footer.php');  ?>