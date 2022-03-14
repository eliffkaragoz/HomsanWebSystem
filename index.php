<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>multi-user role-based-login-system</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<style>
		
        .body {
                background-color: #d9d9d9;
                font-family: 'Ubuntu', sans-serif;
            }

		.main {
                background-color: #FFFFFF;
                width: 430px;
                height: 570px;
                margin: 7em auto;
                border-radius: 1.5em;
                box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
            }
			.form {
                margin: 50px auto;
                width: 300px;

                padding: 30px 25px;
                background: white;
            } .sign {
                padding: 40px;
                color: #000;
                font-family: 'Ubuntu', sans-serif;
                font-weight: bold;
                font-size: 23px;
            }
            .form-control {
                width: 100%;
                color: rgb(38, 50, 56);
                font-weight: 400;
                font-size: 10px;
                letter-spacing: 1px;
                padding: 10px 20px;
                border-radius: 5px;
                outline: none;
                box-sizing: border-box;
                margin-bottom: 50px;
                text-align: center;
                margin-bottom: 27px;
                font-family: 'Montserrat', sans-serif;
                }
            .login-input:focus {
                border-color:#6e8095;
                outline: none;
            }
            .submit {
                cursor: pointer;
                border-radius: 5em;
                color: #fff;
                background: #000080;
                border: 0;
                padding-left: 40px;
                padding-right: 40px;
                padding-bottom: 10px;
                padding-top: 10px;
                font-family: 'Ubuntu', sans-serif;
                margin-left: 25%;
				margin-top: 27px;

                font-size: 13px;
                box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
            }
            .link {
				margin-top: 27px;
                color: #666;
                font-size: 15px;
                text-align: center;
            }
            .link a {
                color: #666;
            }
            h3 {
                font-weight: normal;
                text-align: center;
            }
            .text {
                color: #000;
                font-weight: normal;
                font-size: 15px;
				font-family: "Roboto",sans-serif;
            }

	</style>



</head>
<body>
      <div class="main">
      	<form class="form"
      	      action="login_control/check-login.php" 
      	      method="post" >
      	      <h1 class="sign" align="center" >Giriş Yap</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
		  <div class="mb-3">
		    <label for="username" 
		           class="text">Kullanıcı Adı</label>
		    <input type="text" 
		           class="form-control" 
		           name="username" 
		           id="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="text">Şifre</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
		  <div class="mb-1">
		    <label class="text">Hangi rolde giriş yapmak istiyorsun?</label>
		  </div>
		  <select class="form-select form-select-sm"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="customer" >Müşteri</option>
			  <option value="admin">Admin</option>
			  <option value="employee">Çalışan</option>
		  </select>
		 
		  <button type="submit"  class="submit"  >Giriş Yap</button>
            <p class="link"><a href=" register_customer.php" > Kayıt Ol</a></p>
		</form>
      </div>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>