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
                        <h2 class="mb-3 p-2">Add Team </h2>
                        <a href="manageteam.php" class="btn btn-primary mt-3">Manage Team</a>
                    </div>
                    <?php
                        if (isset($_POST['submit'])) {
                          $tmtitle = $_POST['tm_title'];
                          $tmsubtitle = $_POST['tm_subtitle'];
                          $tmimg = $_POST['tm_img'];
                          $fullname = $_POST['fullname'];
                          $designation = $_POST['designation'];


                          if ($tmtitle!="" && $tmsubtitle!="" && $fullname!="" &&$designation!="") {

                                $query = "INSERT INTO teammember(tm_title,tm_subtitle,tm_img,fullname,designation) VALUES ('$tmtitle','$tmsubtitle','$tmimg','$fullname','$designation')";
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
                            <!-- Start Team member part -->

                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> Team Title:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="tmtitle" name="tm_title"
                                                    value="" placeholder="full name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Team Sub - Title: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="tmsubtitle"
                                                    name="tm_subtitle" value="" placeholder="Team member Sub Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Modal start -->


                            <div class="col-md-12">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Image
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                            $select_query = "SELECT * FROM filemanager";
                                                                            $select_result = mysqli_query($conn, $select_query);
                                                                            $i = 0;
                                                                            while ($data_select = mysqli_fetch_array($select_result)) {
                                                                                $i++;
                                                                            ?>
                                                                    <label>
                                                                        <input type="radio" name="tm_img"
                                                                            value="<?php echo $data_select['filelink']; ?>"
                                                                            style="opacity: 0;" />
                                                                        <img src="<?php echo "../../uploads/" . $data_select['filelink']; ?>"
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
                                                                onclick="secondFunction()">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="image" type="text" class="form-control" disabled name="tm_img">
                                            <!---chnage here id and name-->
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- end modal -->







                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> Team Member Full Name:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="fullname" name="fullname"
                                                    value="" placeholder="full name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Member Designation: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="desg" name="designation"
                                                    value="" placeholder="Team member Designation">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Team memeber part -->
                            <!-- Links start -->
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> Facebook Link:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="fb_link" name="fb_link"
                                                    value="" placeholder="Facebook Link">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> Twitter Link:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="twitter_link" name="twitter_link"
                                                    value="" placeholder="Twitter Link">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> Instagram Link:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="insta_link" name="insta_link"
                                                    value="" placeholder="Instagram Link">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of link form -->


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
        function secondFunction() {
            var selected_option1 = document.querySelector('input[name=tm_img]:checked').value; //change here name
            document.getElementById('image').value = selected_option1; //change id here
        }
        </script>

        <?php include ('../../inc/footer.php') ?>