<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>

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
                border: none;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php
    require('db_conn.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {

        $role    = stripslashes($_REQUEST['role']);
        $role    = mysqli_real_escape_string($conn, $role);
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);
     
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
   
        $query    = "INSERT into `users` (role, username, password)
                     VALUES ('$role',  '$username', '" . md5($password) . "' )";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Kayıt Başarılı</h3><br/>
                  <p class='link'> <a href='index.php'>Giriş Yap</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Alanlar boş bırakılamaz.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div class="main">
    <form class="form" action="" method="post">
    <h1 class="sign" align="center" >Kayıt Ol</h1>



        <div class="mb-3">
		    <label for="username" class="text">Kullanıcı Adı</label>
		    <input type="text"  class="form-control"  name="username"  id="username">
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
		  </div>
          <select class="form-select form-select-sm"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="customer" >Müşteri</option>
		  </select>
		 

        <input type="submit" name="submit" value="Kayıt Ol" class="submit">
        <p class="link"><a href=" index.php">Giriş Yap</a></p>
    </form>

    </div>
  
<?php
    }
?>
</body>
</html>