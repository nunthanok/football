<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/sweetalert2.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">ເຂົ້າສູ່ລະບົບ</h1>
			<h6 class="text-center" >ກະລຸນາປ້ອນ ຊື່ຜູ້ໃຊ້ ແລະ ລະຫັດຜ່ານ ເພື່ອເຂົ້າໃຊ້ລະບົບ</h6>
            <div class="account-wall">
                <form id="form-signin" >
                <input type="text" class="form-control" placeholder="ຊື່ຜູ້ໃຊ້" id="username" name="username" required autofocus>
                <input type="password" class="form-control" placeholder="ລະຫັດຜ່ານ" id="password" name="password" required><br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                  ເຂົ້າສູ່ລະບົບ </button>
                </form>
            </div>
        </div>
    </div>
</div>

	

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>

<script>

$(document).ready(function(){

	$("#form-signin").submit(function(event){
		event.preventDefault();
		var username = $("#username").val();
		var password = $("#password").val();

		// console.log(username);
		// console.log(password);

		$.ajax({
			
			url: "check_login.php",
			method: "POST",
			data:{username: username, password: password},
			success: function(data){
				console.log(data);
				if(data == 1){
					Swal.fire({
						position: 'center',
						icon: 'success',
						title: 'ເຂົ້າສູ່ລະບົບສຳເລັດ',
						showConfirmButton: false,
						timer: 1500
					});
					setTimeout(' window.location.href = "index.php"; ',2000);
				}else{
					Swal.fire({
						position: 'center',
						icon: 'error',
						title: 'ຊື່ ຫລື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ',
						showConfirmButton: false,
						timer: 1500
					});
					$("#form-signin")[0].reset();
				}
			}
			
		});

		
	});


})

</script>



</body>
</html>
