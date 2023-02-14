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
                <i class="fa-solid fa-right-from-bracket"></i>
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
                        <a class="nav-link text-white" href=""><i class="fa-solid fa-table mr-2"></i>Data Pemesan</a>
                        <hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href=""><i class="fa-solid fa-right-from-bracket"></i>Keluar</a>
                        <hr class="bg-secondary">
                    </li>
                </ul>
            </div>
            <div class="col-md-9 p-5 pt-2 bg-white">
                <h3><i class="fa-solid fa-gauge mr-2"></i>Dashboard</h3>
                <hr class="bg-dark">
                <div class="alert alert-primary mt-5" role="alert">
                    <marquee behavior="" direction="">Selamat Datang di Dashboard Admin!</marquee> 
                </div>
                <div class="row">
                    <div class="card bg-white mt-4 ml-3" style="width: 18rem;">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa-solid fa-cash-register"></i>
                            </div>
                            <h5 class="card-title">Jumlah Order</h5>
                            <div class="display-4">938</div>
                        </div>
                    </div>
                    <div class="card bg-white mt-4 ml-4" style="width: 18rem;">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa-solid fa-sack-dollar"></i>
                            </div>
                            <h5 class="card-title">Jumlah Pemasukan</h5>
                            <div class="display-5">Rp 3.000.000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>