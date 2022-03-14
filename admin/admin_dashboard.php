<?php
include "../db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax_admin.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style>
			.navbar{
				background: #555 ;
			}
			.navbar  img{
				width: 150px;
				display: block;
			}
			.navbar-brand{
				font-family: "Roboto ", sans-serif!important;
			}
			.navbar ul.navbar-nav li.nav-item .nav-link{
				font-family: "Roboto",sans-serif;
				font-size: 18px;
				padding: 0px 40px;
			}
			.navbar ul.form-inline btn{
				color: pink;
				font-family: "Roboto",sans-serif;
				font-size: 18px;
				padding: 0px 40px;
			}.modal-dialog {
				position: fixed;
				font-family: Arial, Helvetica, sans-serif;
				top: 200px;
				bottom: 50px;
		
				margin: 50px auto;

                padding: 30px 25px;


				left: 400px;
				width: 100%; /* Full width */
				height: 100%; /* Full height */
				overflow: auto; 
				
			}	
			.col-sm-6{
				align: center;

				padding: 20px 0px;
			}	
			.col-sm-7{
			
				padding: 20px 0px;
       		     top: 10px;
			}.box
			{	
				padding: 0px 400px;
				background-color:#fff;
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
			.form {
                margin: 50px auto;
                width: 300px;

                padding: 30px 25px;
                background: white;
            }
 	</style> 
	
</head>
<body>

<header>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
		  <a class="navbar-brand font-bold" href="#"><img src=" ../images/logo2.png" class="img-logo"/></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSuapportedContent-4">
			  <ul class="navbar-nav ml-auto">
				  
				  <li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profil </a>
					  <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
						  <a class="dropdown-item" >Elif Karagöz</a>
						  <a class="dropdown-item" href=" ../logout.php">Çıkış Yap</a>
					  </div>
				  </li>
			  </ul>
		  </div>
  </nav>

</header>
<div class="container">

<p id="success"></p>
	<div class="table-wrapper">
		<div class="box">
			
				<h1 align="center">Kullanıcılar</h1>
			

		</div>
		<div class="col-sm-7">
					<a href="#addEmployeeModal" class="btn btn-info btn-lg" data-toggle="modal"> <span>Yeni Kullanıcı	 Ekle</span></a>
				</div>
		<table class="table">
			<thead class="thead-light"  >
				<tr>
					
					<th> No</th>
					<th>Rol</th>
					<th>Username</th>
					<th>Password</th>
					

				</tr>
			</thead>
			<tbody>
			
			<?php
			$result = mysqli_query($conn,"SELECT * FROM users");
				$i=1;
				while($row = mysqli_fetch_array($result)) {
			?>
			<tr id="<?php echo $row["id"]; ?>">
			
				<td><?php echo $i; ?></td>
				<td><?php echo $row["role"]; ?></td>
				<td><?php echo $row["username"]; ?></td>
				<td><?php echo $row["password"]; ?></td>
			
				<td>
				



					
					<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						title="Delete"></i></a>
				</td>
			</tr>
			<?php
			$i++;
			}
			?>
			</tbody>
		</table>
		
	</div>
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="user_form">
				<div class="modal-header">						
					<h4 class="modal-title">Kullanıcı Ekle</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">					
					


					<div class="mb-1">
		    <label class="text">Hangi rolde kayıt yapmak istiyorsun?</label>
		  </div>
		  <select class="form-select form-select-sm"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="customer" >Müşteri</option>
			  <option value="admin">Admin</option>
			  <option value="employee">Çalışan</option>
		  </select>

						
					<div class="form-group">
						<label>Kullanıcı Adı</label>
						<input type="username" id="username" name="username" class="form-control" required>
					</div>	
					<div class="form-group">
						<label>Şifre</label>
						<input type="password" id="password" name="password" class="form-control" required>
					</div>	
				</div>
				<div class="modal-footer">
					<input type="hidden" value="1" name="type">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<button type="button" class="btn btn-success" id="btn-add">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<input type="hidden" id="id_d" name="id" class="form-control">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<button type="button" class="btn btn-danger" id="delete">Delete</button>
				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>