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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <?php 
                    $query= "SELECT * FROM contact";
                    $result= mysqli_query($conn, $query);
                    $data=$result->fetch_assoc();

                    ?>
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">
                        <?php echo $data['title'];?></h5>
                    <h1 class="mb-5"><?php echo $data['subtitle'];?></h1>
                </div>

                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <?php
                                $query= "SELECT * FROM contact";
                                $result= mysqli_query($conn, $query);
                                while($data1=mysqli_fetch_array($result)){
                                    ?>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">
                                    <?php echo $data1['btnname'];?></h5>
                                <p><i
                                        class="fa fa-envelope-open text-primary me-2"></i><?php echo $data1['mailaddress'];?>
                                </p>
                            </div>
                            <?php
                                }
                        ?>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                            <iframe class="position-relative rounded w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                                frameborder="0" style="min-height: 350px; border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="col-md-6">
                            <div class="wow fadeInUp" data-wow-delay="0.2s">
                                <?php 
                                    if (isset($_POST['submit'])) {
                                        $yname = $_POST['yname'];
                                        $yemail = $_POST['yemail'];
                                        $subject = $_POST['subject'];
                                        $message = $_POST['message'];
                            
                      
                      
                                        $query = "INSERT INTO contact(yname,yemail, subject, message) VALUES ('$yname','$yemail','$subject','$message') ";
                                        $result = mysqli_query($conn, $query);
                                        if ($result) {
                                            echo "<meta http-equiv=\"refresh\" content=\"10;URL=index.php\">";
                                        
                                            ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>

                                    <strong>Thank you contacting Us. </strong>
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
                                                <input type="text" class="form-control" name="yname" id="name"
                                                    placeholder="Your Name">
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" name="yemail" id="email"
                                                    placeholder="Your Email">
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="subject" name="subject"
                                                    placeholder="Subject">
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" name="message"
                                                    placeholder="Leave a message here" id="message"
                                                    style="height: 150px"></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" name="submit" type="submit"> Send
                                                Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <?php  include('inc/footer.php');  ?>