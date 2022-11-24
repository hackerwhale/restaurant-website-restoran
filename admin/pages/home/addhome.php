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
                        <h2 class="mb-3 p-2">Add File in Home Page</h2>
                        <a href="managehome.php" class="btn btn-primary mt-3">Manage file</a>
                    </div>
                    <?php
                    if (isset($_POST['submit'])) {
                        $introtitle = $_POST['intro_title'];
                        $introdesc = $_POST['intro_desc'];
                        $introimg = $_POST['intro_img'];
                        $introimgtype = $_POST['intro_img_type'];
                        $btname = $_POST['btnname'];

                        if ($introtitle != "" && $introdesc != "" && $introimg != "" && $introimgtype != "" && $btname != "") {
                            $query = "INSERT INTO home(intro_title, intro_desc, intro_img, intro_img_type, btnname)
                                VALUES ('$introtitle','$introdesc','$introimg','$introimgtype','$btname')";
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
                            <!-- Start Intro part -->
                            <!-- modal -->
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> Intro Title:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="intro_title"
                                                    name="intro_title" value="" placeholder="full name">
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Intro Image Type: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-file-code"
                                                            aria-hidden="true"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="intro_img_type"
                                                    name="intro_img_type" value="" placeholder="Intro Image Type">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
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
                                                                                <input type="radio" name="intro_img"
                                                                                    value="<?php echo $data_select['filelink']; ?>"
                                                                                    style="opacity: 0;" />
                                                                                <img src="<?php echo "../../uploads/" . $data_select['filelink']; ?>"
                                                                                    alt="" height="100px;"
                                                                                    width="100px;"
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
                                                                        onclick="firstFunction()">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <input id="imagebox" type="text" class="form-control" disabled name="intro_img"> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                            <!-- end modal -->


                            
                            <!-- model -->
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Intro Description: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="intro_desc"
                                                    name="intro_desc" value="" placeholder="Intro Description">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Button Name: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-file-code"
                                                            aria-hidden="true"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="btnname" name="btnname"
                                                    value="" placeholder="butotn name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Intro part -->


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                    </form>
                </div>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <script>
    function firstFunction() {
        var selected_option1 = document.querySelector('input[name=intro_img]:checked').value;
        document.getElementById('imagebox').value = selected_option1;
        }
    </script>

    <?php include('../../inc/footer.php') ?>