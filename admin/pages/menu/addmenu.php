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
                        <h2 class="mb-3 p-2">Add Menu</h2>
                        <a href="managemenu.php" class="btn btn-primary mt-3">Manage Menu</a>
                    </div>
                    <?php
                        if (isset($_POST['submit'])) {
                          $mtitle = $_POST['menu_title'];
                          $msubtitle = $_POST['menu_subtitle'];
                          $text1 = $_POST['text1'];
                          $text2 = $_POST['text2'];
                          $loogo = $_POST['logo'];
                          $food = $_POST['food_img'];
                          $mitem = $_POST['me_item'];
                          $price = $_POST['price'];
                          $desc = $_POST['me_desc'];
                          


                          if ($mtitle!="" && $msubtitle!="" && $text1!="" && $text2!="" && $loogo!="" && $food!="" && $mitem!=""  && $price!="" && $desc!="" ) {

                                $query = "INSERT INTO menu(menu_title, menu_subtitle, text1, text2, logo, food_img, me_item, price, me_desc) 
                                VALUES ('$mtitle','$msubtitle','$text1','$text2',' $loogo','$food','$mitem','$price','$desc')";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                  ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>File is added successfully.</strong>
                    </div>
                    <meta http-equiv="refresh" content=" 0 ; url = managemenu.php" />
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
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> Menu Title:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="metitle" name="menu_title"
                                                    value="" placeholder="Menu Title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Menu Subtitle: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="mesubtitle"
                                                    name="menu_subtitle" value="" placeholder="Menu Sub Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Text 1: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="te1" name="text1" value=""
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Text 2: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="te2" name="text2" value=""
                                                    placeholder="">
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
                                                Select logo
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
                                                                        <input type="radio" name="logo"
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
                                                                onclick="firstFunction()">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="image" type="text" class="form-control" disabled name="logo">
                                            <!---chnage here id and name-->
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- end modal -->
                            <!-- Modal start -->


                            <div class="col-md-12">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal1">
                                                Image
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal1" tabindex="-1"
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
                                                                        <input type="radio" name="food_img"
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
                                            <input id="image1" type="text" class="form-control" disabled name="food_img">
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
                                            <label> Item:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="meitem" name="me_item"
                                                    value="" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> Price:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-paragraph"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="pric" name="price" value=""
                                                    placeholder="Price of an item">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Item - Description: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="medesc" name="me_desc"
                                                    value="" placeholder="Food Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Team memeber part -->


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
        function firstFunction() {
            var selected_option1 = document.querySelector('input[name=logo]:checked').value; //change here name
            document.getElementById('image').value = selected_option1; //change id here
        }
        </script>
        <script>
        function secondFunction() {
            var selected_option = document.querySelector('input[name=food_img]:checked').value; //change here name
            document.getElementById('image1').value = selected_option; //change id here
        }
        </script>

        <?php include ('../../inc/footer.php') ?>