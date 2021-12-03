

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login System</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/drilldown.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/login.js"></script>
	<!-- /theme JS files -->

    
	<!-- Alertify -->
	<!-- JavaScript -->
	<script type="text/javascript" src="assets/alertifyjs/alertify.min.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" href="assets/alertifyjs/css/alertify.min.css"/>
	<link rel="stylesheet" href="assets/alertifyjs/css/themes/bootstrap.min.css"/>

	<style type="text/css">
		.page-container.login-container {
		    background-image: url('assets/images/wall6.jpg');
			-webkit-background-size: cover; /* For WebKit*/
		    -moz-background-size: cover;    /* Mozilla*/
		    -o-background-size: cover;      /* Opera*/
		    background-size: cover;
		}
		.navbar-inverse {
				background-color: #004b94;
				border-color: #004b94;
		}
	</style>

</head>

<?php 
require('functions.php');
if (isset($_POST['register'])) {
	
		if (register($_POST) > 0) {
			
				echo "<script>
                        alert('User baru berhasil ditambahkan');
					</script>";

		} else {
			echo mysqli_error($db);
		} 

}
if (isset($_POST["loginn"])) {
	header("Location:login.php");
}

?>

<body>

<!-- Page container -->
<div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Simple login form -->
            <form action="" method="POST">
                <div class="panel panel-body login-form" style="opacity: 0.9;">
                    <div class="text-center">
                        <h5 class="content-group">Buat Akun Baru</h5>
                    </div>

                    <div class="form-group has-feedback has-feedback-left">
                        <input type="text" class="form-control" placeholder="Nama Pengguna" id="nama_user" name="nama_user">
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group has-feedback has-feedback-left">
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group has-feedback has-feedback-left">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group has-feedback has-feedback-left">
                        <input type="password" class="form-control" placeholder="Konfirmasi Password" id="password2" name="password2">
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="register" value="register">register <i class="icon-circle-right2 position-right"></i></button>
                    </div>
                    <span class="help-block text-center no-margin" style="color: red;"><a href="login.php" style="color: red;"> kembali </a></span>


                </div>
            </form>
            <!-- /simple login form -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


    <!-- Footer -->
    <div class="footer text-muted">
        <a href="adicahyo.com" target="_blank">adicahyo.com</a> &copy; 2021</div>
    </div>
    <!-- /footer -->

</div>
<!-- /page container -->

</body>
</html>
