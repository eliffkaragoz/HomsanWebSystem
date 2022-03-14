<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">b 
    <title>Online Chating Bot</title>
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
    *{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            box-sizing: border-box;
        }
        #container
        {
            height: 100vh;
            width: 100%;
            position: relative;
            display: grid;
            place-items: center;
            background: #F7F7F7;
            overflow: hidden;
        }
        #dot1
        {
            height: 900px;
            width: 900px;
            position: absolute;
            top: -200px;
            right: -200px;
            background: #F7F7F7;
            border-radius: 50%;
        }
        #dot2
        {
            height: 900px;
            width: 900px;
            position: absolute;
            bottom: -200px;
            left: -200px;
            background: #F7F7F7;
            border-radius: 50%;
        }
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
        #screen
        {
            height: 670px;
            width: 400px;
            border-radius: 30px;
            background: #F7F7F7;
            border-radius: 25px;
            border: 15px solid #fff;
            box-shadow: 3px 3px 15px rgba(0,0,0,0.2);
            position: relative;
            overflow: hidden;
        }
        #header
        {
            height: 80px;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: #104F8C;
            display: grid;
            place-items: center;
            font-size: 25px;
            color: #F7F7F7;
            font-weight: bold;
            text-shadow: 1px 1px 2px #000000a1;
        }
        #messageDisplaySection
        {
            height: 450px;
            width: 100%;
            position: absolute;
            left: 0;
            top: 100px;
            padding: 0 20px;
            overflow-y: auto;
        }
        .chat
        {
            min-height: 40px;
            max-width: 60%;
            padding: 15px;
            border-radius: 10px;
            margin: 15px 0;
        }
        .botMessages
        {
            background: #104F8C;
            color: #fff;
            text-shadow: 1px 1px 2px #000000d4;
        }
        #messagesContainer
        {
            height: auto;
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }
        .usersMessages
        {
            background: #00000010;
        }
        #userInput
        {
            height: 50px;
            width: 90%;
            position: absolute;
            left: 5%;
            bottom: 3%;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
        }
        #messages
        {
            height: 50px;
            width: 90%;
            position: absolute;
            left: 0;
            border: none;
            outline: none;
            background: transparent;
            padding: 0px 15px;
            font-size: 17px;
        }
        #send
        {
            height: 50px;
            width: 24%;
            position: absolute;
            right: 0;
            border: none;
            outline: none;
            display: grid;
            place-items: center;
            color: #fff;
            font-size: 20px;
            background: #343434;
            cursor: pointer;
            display: none;
        }



    </style> 
</head>
<body>
    <header>

          <nav class="navbar navbar-expand-sm navbar-light bg-light">
				<a class="navbar-brand font-bold" href="customer_dashboard.php"><img src=" ../images/logo2.png" class="img-logo"/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSuapportedContent-4">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item"> <a class="nav-link" href="customer_dashboard.php">ANASAYFA</a> </li>

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
    <div id="container">
        <div id="dot1"></div>
        <div id="dot2"></div>
        <div id="screen">
            <div id="header">ONLINE CHATBOT</div>
            <div id="messageDisplaySection">
            
        </div>
            <div id="userInput">
                <input type="text" name="messages" id="messages" autocomplete="OFF" placeholder="Type Your Message Here." required>
                <input type="submit" value="Send" id="send" name="send">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function(){
            $("#messages").on("keyup",function(){

                if($("#messages").val()){
                    $("#send").css("display","block");
                }else{
                    $("#send").css("display","none");
                }
            });
        });
        $("#send").on("click",function(e){
            $userMessage = $("#messages").val();
            $appendUserMessage = '<div class="chat usersMessages">'+ $userMessage +'</div>';
            $("#messageDisplaySection").append($appendUserMessage);

            $.ajax({
                url: "bot.php",
                type: "POST",
                data: {messageValue: $userMessage},
                success: function(data){
                    $appendBotResponse = '<div id="messagesContainer"><div class="chat botMessages">'+data+'</div></div>';
                    $("#messageDisplaySection").append($appendBotResponse);
                }
            });
            $("#messages").val("");
            $("#send").css("display","none");
        });
    </script>
</body>
</html>