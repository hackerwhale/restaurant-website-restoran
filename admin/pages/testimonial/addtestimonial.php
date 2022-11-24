<?php 
require ('../../connection/config.php');
include ("../../inc/header.php"); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include ('../../inc/navbar.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include ('../../inc/aside.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="title">
                        <h2 class="mb-3 p-2">Add Testimonial</h2>
                        <a href="managetestimonial.php" class="btn btn-primary mt-3">Manage Testimonial</a>
                    </div>
                    <?php
                        if (isset($_POST['submit'])) {
                          $photo = $_POST['photo'];
                          $mess = $_POST['message'];
                          $fullname = $_POST['name'];
                          $prof = $_POST['profession'];


                          if ($photo!="" && $mess!="" && $fullname!="" && $prof!="" ) {

                                $query = "INSERT INTO testimonial(photo, message, name, profession)
                                VALUES ('$photo','$mess','$fullname','$prof')";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                  ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>File is added successfully.</strong>
                    </div>
                    <!-- <meta http-equiv="refresh" content=" 0 ; url = managefile.php" /> -->
                    <script>
                    $(".alert").alert();
                    </script>
                    <?php
                        } else {
                          ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>File couldn't be added.</strong>
                    </div>
                    <?php
                        }
                      } else {
            echo "File couldn't be uploaded successfully.";
          }
        }

?>

                    <form action="#" Method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <!-- Start aboutus part -->
                            <!-- second Modal start -->


                            <div class="col-md-12">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal1">
                                                <!---Change target-->
                                                Select Image 2
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <!---Change labelby-->
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <style>
                                                                    [type=radio]:checked+img {
                                                                        outline: 2px solid #f00;
                                                                    }
                                                                    </style>

                                                                    <?php
                                                                            $select_query1 = "SELECT * FROM filemanager";
                                                                            $select_result1 = mysqli_query($conn, $select_query1);
                                                                            $i = 0;
                                                                            while ($data_select1 = mysqli_fetch_array($select_result1)) {
                                                                                $i++;
                                                                            ?>
                                                                    <label>
                                                                        <input type="radio" name="photo"
                                                                            value="<?php echo $data_select1['filelink']; ?>"
                                                                            style="opacity: 0;" />
                                                                        <img src="<?php echo "../../uploads/" . $data_select1['filelink']; ?>"
                                                                            alt="" height="100px;" width="100px;"
                                                                            style="margin-right:20px;">
                                                                    </label>
                                                                    <?php
                                                            }
                                                            ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-dismiss="modal"
                                                                onclick="newFunction()">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="image2" type="text" class="form-control" disabled name="photo">
                                            <!---chnage here id and name-->
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- end modal -->




                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Name </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="name" name="name" value=""
                                                    placeholder="Full name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> Profession</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="profession"
                                                    name="profession" value="" placeholder="Profession">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Messages </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="message" name="message"
                                                    value="" placeholder="Message">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End aboutus part -->


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
        </div>
        </section>
        <!-- /.content -->
        <script>
        function newFunction() {
            var selected_option2 = document.querySelector('input[name=photo]:checked').value; //change here name
            document.getElementById('image2').value = selected_option2; //change id here
        }
        </script>

        <?php include ('../../inc/footer.php') ?>