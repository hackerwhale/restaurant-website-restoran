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
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Manage Menu</h1>
                            <a href="addmenu.php" class="btn btn-primary mt-2">Add Menu</a>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="bg-warning">
                                            <th>S.N</th>
                                                <th>Menu Title</th>
                                                <th>Menu Sub-Title</th>
                                                <th>Text1</th>
                                                <th>Text2</th>
                                                <th>Menu Item</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $query= "SELECT * FROM menu";
                                            $result= mysqli_query($conn, $query);
                                            $i=0;
                                            while ($data= mysqli_fetch_array($result)){
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo ++$i; ?></th>
                                                <td><?php echo $data['menu_title'];?></td>
                                                <td><?php echo $data['menu_subtitle'];?></td>
                                                <td><?php echo $data['text1'];?></td>
                                                <td><?php echo $data['text2'];?></td>
                                                <td><?php echo $data['me_item'];?></td>
                                                <td><?php echo $data['me_desc'];?></td>
                                                <td>
                                                    <a href="viewfile.php?id=<?php echo $data['id'];?>"><button
                                                            type="button"
                                                            class="btn btn-sm btn-info float-left m-1">View</button></a>
                                                    <a href="editfile.php?id=<?php echo $data['id']; ?>"><button
                                                            type="button"
                                                            class="btn btn-sm btn-primary float-left m-1">Edit</button></a>
                                                    <a
                                                        href="../../process/deletefile.php?id=<?php echo $data['id']; ?>"><button
                                                            type="button"
                                                            class="btn btn-sm btn-danger float-left m-1">Delete</button></a>
                                                </td>

                                            </tr>

                                            <?php
                                            }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr class="bg-warning">
                                            <th>S.N</th>
                                                <th>Menu Title</th>
                                                <th>Menu Sub-Title</th>
                                                <th>Text1</th>
                                                <th>Text2</th>
                                                <th>Menu Item</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>

                                        </tfoot>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- End of content wrapper -->

        <?php include ('../../inc/footer.php') ?>