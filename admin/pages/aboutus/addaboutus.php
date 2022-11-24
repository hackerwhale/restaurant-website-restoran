<?php
require('../../connection/config.php');
include("../../inc/header.php"); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include('../../inc/navbar.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include('../../inc/aside.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="title">
                        <h2 class="mb-3 p-2">Add About Us</h2>
                        <a href="manageaboutus.php" class="btn btn-primary mt-3">Manage About Us</a>
                    </div>
                    <?php
                    if (isset($_POST['submit'])) {
                        $img1 = $_POST['abimg1'];
                        $img2 = $_POST['abimg2'];
                        $img3 = $_POST['abimg3'];
                        $img4 = $_POST['abimg4'];
                        $abouttitle = $_POST['ab_title'];
                        $aboutsubtitle = $_POST['ab_subtitle'];
                        $aboutdesc = $_POST['ab_desc'];
                        $year = $_POST['year'];
                        $exxp = $_POST['exp'];
                        $btnname = $_POST['buttonname'];


                        if ( $img1!="" && $img2!="" && $img3!="" && $img4!="" &&  $abouttitle != "" && $aboutsubtitle != "" && $aboutdesc != "" && $year != "" && $exxp != "" && $btnname != "" ) {

                            $query = "INSERT INTO aboutus(abimg1, abimg2, abimg3, abimg4,ab_title, ab_subtitle, ab_desc, year, exp, buttonname)
                                VALUES ('$img1','$img2','$img3','$img4','$abouttitle','$aboutsubtitle','$aboutdesc','$year','$exxp ','$btnname')";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>File is added successfully.</strong>
                    </div>
                    <meta http-equiv="refresh" content=" 0 ; url = manageaboutus.php" />
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
                            <!-- Modal start -->


                            <div class="col-md-12">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Select Image 1
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
                                                                        <input type="radio" name="abimg1"
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
                                                                onclick="fourFunction()">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="image1" type="text" class="form-control" disabled name="abimg1">
                                            <!---chnage here id and name-->
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- end modal -->
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
                                                                        <input type="radio" name="abimg2"
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
                                                                onclick="fiveFunction()">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="image2" type="text" class="form-control" disabled name="abimg2">
                                            <!---chnage here id and name-->
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- end modal -->

                            <!-- Third Modal start -->


                            <div class="col-md-12">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal2">
                                                <!---Change target-->
                                                Select Image 3
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal2" tabindex="-1"
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
                                                                            $select_query2 = "SELECT * FROM filemanager";
                                                                            $select_result2 = mysqli_query($conn, $select_query2);
                                                                            $i = 0;
                                                                            while ($data_select2 = mysqli_fetch_array($select_result2)) {
                                                                                $i++;
                                                                            ?>
                                                                    <label>
                                                                        <input type="radio" name="abimg3"
                                                                            value="<?php echo $data_select2['filelink']; ?>"
                                                                            style="opacity: 0;" />
                                                                        <img src="<?php echo "../../uploads/" . $data_select2['filelink']; ?>"
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
                                                                onclick="sixFunction()">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="image3" type="text" class="form-control" disabled name="abimg3">
                                            <!---chnage here id and name-->
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- end modal -->

                            <!-- Fourth Modal start -->


                            <div class="col-md-12">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal4">
                                                <!---Change target-->
                                                Select Image 4
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal4" tabindex="-1"
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
                                                                            $select_query3 = "SELECT * FROM filemanager";
                                                                            $select_result3 = mysqli_query($conn, $select_query3);
                                                                            $i = 0;
                                                                            while ($data_select3 = mysqli_fetch_array($select_result3)) {
                                                                                $i++;
                                                                            ?>
                                                                    <label>
                                                                        <input type="radio" name="abimg4"
                                                                            value="<?php echo $data_select3['filelink']; ?>"
                                                                            style="opacity: 0;" />
                                                                        <img src="<?php echo "../../uploads/" . $data_select3['filelink']; ?>"
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
                                                                onclick="sevenFunction()">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="image4" type="text" class="form-control" disabled name="abimg4">
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
                                            <label> About Us Title:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="abtitle" name="ab_title"
                                                    value="" placeholder="About US Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>About Us Subtitle: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="absubtitle"
                                                    name="ab_subtitle" value="" placeholder="About Sub Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>About Us Description: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="about_desc" name="ab_desc"
                                                    value="" placeholder="About Us Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> Number of Experience:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="year" name="year" value=""
                                                    placeholder="Number of  year">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> Experience:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="exp" name="exp" value=""
                                                    placeholder="Experience">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Button Name: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="button" name="buttonname"
                                                    value="" placeholder="Button Name">
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
        function fourFunction() {
            var selected_option1 = document.querySelector('input[name=abimg1]:checked').value; //change here name
            document.getElementById('image1').value = selected_option1; //change id here
        }
        </script>
        <script>
        function fiveFunction() {
            var selected_option2 = document.querySelector('input[name=abimg2]:checked').value; //change here name
            document.getElementById('image2').value = selected_option2; //change id here
        }
        </script>
        <script>
        function sixFunction() {
            var selected_option3 = document.querySelector('input[name=abimg3]:checked').value; //change here name
            document.getElementById('image3').value = selected_option3; //change id here
        }
        </script>
        <script>
        function sevenFunction() {
            var selected_option4 = document.querySelector('input[name=abimg4]:checked').value; //change here name
            document.getElementById('image4').value = selected_option4; //change id here
        }
        </script>
        <?php include('../../inc/footer.php') ?>