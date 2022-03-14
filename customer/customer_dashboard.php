

<!doctype html>
<html lang="en">
	
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <title>Bootstrap4 </title>
 <style>
            .navbar{
                background: #555 ;
            }


            .navbar  img{
                width: 200px;
                margin: 0 auto;
                max-width: 100%;
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
            }
            .slider{
                height: 10;
            }


            .carousel-caption{
                top: 30%!important;
            }


            .carousel-caption h3{
                font-family: "Roboto",sans-serif;
                font-size: 43px;
                color:#fff;
                text-shadow: 1px 1px 3px #000 ;
                letter-spacing: 5px;
            }

            .carousel-caption p{
                font-family: "Roboto",sans-serif;
                font-size: 20px;
                color:#fff;
                text-shadow: 1px 1px 3px #000 ;
                letter-spacing: 2px;
              
            }
            section#content1{
              margin-top: 35px;
            }

            section#content1 .colon1{
              
                border-radius:  40px/40px;
                background-color: rgb(235, 235, 235);
            }


            section#content1 .colon1 img{

              margin: 0 auto;
              max-width: 100%;
              display: block;
            }

            ""
            section#content1 .colon1 h2{
                font-family: "Roboto",sans-serif;
                font-size: 20px;
                font-weight: 300!important;
                text-align: center;
                

              
              }
              section#content1 .colon1 p{
                font-family: "Roboto",sans-serif;
                font-size: 14px;
                font-weight: 300!important;
                text-align: center;
                

              
              }
              
            section#formalani{
                  background-color: rgb(235, 235, 235);
                  min-height: 524px;
                  padding: 30px 0px;
                  box-sizing: border-box;
                  -webkit-box-sizing: border-box;
                  
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
					
          <li class="nav-item active"> <a class="nav-link" href=" video_conferans.html">TOPLANTI BAŞLAT <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" href=" mainbot.php">CHATBOT</a> </li>
                          
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
    <section id="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src=" ../images/slider1.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                     <h3>HOMSAN MOBİLYA</h3>
                    <p> SİZLERE ÖZEL TASARIMLAR, EVİNİZE UYUM SAĞLAYACAK MOBİLYA VE DEKORASYONLAR HOMSAN MOBİLYADA..</p>
                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">   İNİRİMLİ FİYATLARI İNCELE
                    </button>
                </div>
            </div>
              <div class="carousel-item">
                <img class="d-block w-100" src=" ../images/slider2.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <h3>HOMSAN MOBİLYA</h3>
                  <p> SİZLERE ÖZEL TASARIMLAR, EVİNİZE UYUM SAĞLAYACAK MOBİLYA VE DEKORASYONLAR HOMSAN MOBİLYADA..</p>
                  <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                    İNİRİMLİ FİYATLARI İNCELE
                  </button>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src=" ../images/slider3.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                  <h3>HOMSAN MOBİLYA</h3>
                  <p> SİZLERE ÖZEL TASARIMLAR, EVİNİZE UYUM SAĞLAYACAK MOBİLYA VE DEKORASYONLAR HOMSAN MOBİLYADA..</p>
                  <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                    İNİRİMLİ FİYATLARI İNCELE
                  </button>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>
    <span class="badge badge">HOMSAN MOBİLYA</span>
        <!-- List group -->
<div class="list-group" id="myList" role="tablist">
  <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">KOLTUK TAKIMI</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">MUTFAK</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">DOLAP</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">VESTİYER</a>
</div>
    <section id="content1">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="colon1">
                        <img src=" ../images/mail.png" class="img-fluid"/>
                        <h2> MAİL</h2>
                        <p> homsan@gmail.com</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="colon1">
                        <img src=" ../images/phone.png" class="img-fluid"/>
                        <h2> TELEFON</h2>
                        <p>0312 000 00</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="colon1">
                        <img src=" ../images/konum.png" class="img-fluid"/>
                        <h2> ADRES</h2>
                        <p>ANKARA TÜRKİYE</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="formalani">
        <div class="container">
            <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Address 2</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
              </form>
        </div>
    </section>
  </body>
</html>