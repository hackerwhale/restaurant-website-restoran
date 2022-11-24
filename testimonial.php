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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Testimonial Start -->
        <!-- Carousel wrapper -->
        <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">

            <div class="carousel-inner">
                <?php
                     $query= "SELECT * FROM testimonial";
                     $result= mysqli_query($conn, $query);
                    while ($data1=mysqli_fetch_array($result)) {
                        ?>
                <div class="carousel-item active">

                    <img class="rounded-circle shadow-1-strong mb-4"
                        src="<?php echo "admin/uploads/".$data1['photo'];?>" alt="avatar" style="width: 150px;" />
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3"><?php echo $data1['name'];?></h5>
                            <p><?php echo $data1['profession'];?></p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                <?php echo $data1['message'];?>
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
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php  include('inc/footer.php');  ?>