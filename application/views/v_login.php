<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Halaman Login SI-SUBUR.COM</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="login-form">
    <form action="<?php echo base_url('Login/auth')?>" method="post">
		<div class="avatar">
			<img src="<?php echo base_url()?>assets/dashboard/img/girl.png" alt="Avatar">
		</div>
        <h2 class="text-center">SI-SUBUR Login</h2>
				<h3 style="color:red"><?php echo $this->session->flashdata('msg');?></h3>
        <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="Username" required="required" oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong')" oninput="setCustomValidity('')">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required" oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
						<button type="button" onclick="window.location.href = 'https://si-subur.com';" class="btn btn-danger btn-lg btn-block">Back to Blog</button>
        </div>
    </form>
</div>
</body>
</html>
