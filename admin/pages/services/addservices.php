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
                        <h2 class="mb-3 p-2">Add Services</h2>
                        <a href="manageservices.php" class="btn btn-primary mt-3">Manage Services</a>
                    </div>
                    <?php
                        if (isset($_POST['submit'])) {
                          $servicetitle = $_POST['service_title'];
                          $servicesubtitle = $_POST['service_subtitle'];
                          $ftitle = $_POST['feature_title'];
                          $desc = $_POST['description'];
                          $iconn = $_POST['icon'];

                          if ($servicetitle!="" && $servicesubtitle!="" && $iconn!="" && $ftitle!="" && $desc!="" ) {
                            
                                $query = "INSERT INTO services(service_title, service_subtitle, icon, feature_title, description)
                                VALUES (' $servicetitle','$servicesubtitle','$iconn','$ftitle','$desc')";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                  ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>File is added successfully.</strong>
                    </div>
                    <meta http-equiv="refresh" content=" 0 ; url = manageservices.php" />
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
                            <!-- Start Intro part -->
                            <!-- modal -->
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> Service Title:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="stitle" name="service_title"
                                                    value="" placeholder="Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Select Icon
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
                                                                        <input type="radio" name="icon"
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
                                            <input id="image" type="text" class="form-control" disabled name="icon">
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
                                            <label>Service Sub - Title:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="sutitle"
                                                    name="service_subtitle" value="" placeholder="Sub Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Feature Title:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="setitle"
                                                    name="feature_title" value="" placeholder="Service Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Description: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-paragraph"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="descr" name="description"
                                                    value="" placeholder="Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                    </form>
                </div>
        </div>
        </section>
        <!-- /.content -->
        <script>
        function secondFunction() {
            var selected_option1 = document.querySelector('input[name=icon]:checked').value; //change here name
            document.getElementById('image').value = selected_option1; //change id here
        }
        </script>

        <?php include ('../../inc/footer.php') ?>