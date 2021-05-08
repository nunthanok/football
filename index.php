<?php 
date_default_timezone_set("Asia/Bangkok");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="admin/css/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">

    <title>Football</title>

    <style>
    
    @font-face {
        font-family: myFirstFont;
        src: url("admin/fonts/NotoSansLao-Regular.ttf");
        }

        body{
            font-family: "Montserrat", "Helvetica Neue","myFirstFont", Helvetica, Arial, sans-serif; }
        }

    </style>
  </head>
  <body>

        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="index.php">ລະບົບຈອງເດີ່ນບານອອນລາຍ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">ຫນ້າຫລັກ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--End Navbar-->

        <div >
        <div class="container"><br>

            <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-body">
                    
                <form id="bookingIndexForm">

                    <div class="col-12 mb-3">
                    <label for="text"><h3>ເລືອກວັນທີ</h3></label>
                      <input type="text" class="form-control" id="datepicker" autocomplete="off" readonly >
                    </div>


                    <div class="row">
                    <label for="text"><h3>ເລືອກເວລາ</h3></label>
                        <div id="index_time" class="row"></div>
                    </div>


                    <div class="row">
                    <label for="text"><h3>ເລືອກເດີ່ນ</h3></label><br><hr>

                        <div id="index_stadium" class="row"></div>

                        

                        
                    </div><br>

                    <div class="row">
                        <div class="col-md-6">
                        <label for="text">ຊື່ ຜູ້ຈອງ</label>
                        <input class="form-control form-control-lg" type="text"  id="bname" name="bname" aria-label="Phone Number">
                        </div>
                        <div class="col-md-6">
                        <label for="text">ເບີໂທລະສັບ</label>
                        <input class="form-control form-control-lg" type="text" id="bphone" name="bphone"  aria-label="User Name">
                        </div>
                    
                    </div><br>


                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg" type="button"  onclick="booking_save()">ສັ່ງຈອງເດີ່ນ</button>
                    </div>
                    
                 </form>

                </div>
                </div>

            </div>
            </div><br>

        </div>
        </div>
  



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="admin/js/sweetalert2.all.min.js"></script>
    <script src="index.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->


    </script>
  </body>
</html>