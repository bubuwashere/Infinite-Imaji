<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template Admin</title>
        <link rel="stylesheet" href="ASSET/css/bootstrap.css">
        <link rel="stylesheet" href="ASSET/css/bootstrap.min.css">
        <link rel="stylesheet" href="ASSET/css/bootstrap-grid.css">
        <link rel="stylesheet" href="ASSET/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="ASSET/css/bootstrap-reboot.css">
        <link rel="stylesheet" href="ASSET/css/bootstrap-reboot.min.css">

        <link rel="stylesheet" href="fontawesome/css/all.min.css">

        <script src="ASSET/js/bootstrap.js"></script>
        <script src="ASSET/js/bootstrap.bundle.js"></script>
        <script src="ASSET/js/bootstrap.min.js"></script>
        <script src="ASSET/js/bootstrap.bundle.min.js"></script>
        </style>
        <style>
            .nav-link:hover{
                background-color:grey;
            }

            .row{
                height: 1000px;
                overflow: auto;
            }

            .card{
                height: 150px;
            }

            .display-4{
                font-weight: bold;
            }

            .display-5{
                font-weight: bold;
            }

            .card-body-icon{
                position:absolute;
                z-index: 0;
                top:5px;
                right: 20px;
                opacity: 0.7;
                font-size: 90px;
            }
            
        </style>

    </head>

    <body>
        <?php session_start();?>

        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">infinite.imaji</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="form-inline my-2 my-lg-0 ml-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

        <div class="icon ml-3 mt-2">
            <h5>
                </i><a class="badge badge-primary" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
            </h5>
        </div>
        </nav>

        <div class="row no-gutters">
            <div class="col-md-3 bg-dark">
                <ul class="nav flex-column ml-3 mt-4 mb-4 mr-4">
                    <li class="nav-item">
                        <a class="nav-link text-white" href=""><i class="fa-solid fa-gauge mr-2"></i>Home</a>
                        <hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="data_pemesan.php"><i class="fa-solid fa-table mr-2"></i>Data Pemesan</a>
                        <hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Keluar</a>
                        <hr class="bg-secondary">
                    </li>
                </ul>
            </div>
            <div class="col-md-9 p-5 pt-2 bg-white">
                <h3><i class="fas fa-list mr-3"></i>Lihat Order</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID Order</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <?php
                        include 'koneksi.php';
                        $query = "SELECT * FROM tbl_order";
                        $data = mysqli_query($koneksi, $query);

                        while($d = mysqli_fetch_array($data)){

                    ?>
                            <tr>
                                <td><?php echo $d['id_order'];?></td>
                                <td><?php echo $d['nama_order'];?></td>
                                <td><?php echo $d['phone_order'];?></td>
                                <td><?php echo $d['address'];?></td>
                            </tr>

                            <?php

                            
                        }?>
                </table>
            </div>
        </div>
    </body>
</html>