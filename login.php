<?php

session_start();     
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Flavourzilla</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Bilbo' rel='stylesheet'>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
      .loader_bg{
        position: fixed;
        z-index: 999999;
        background-color: #ffffff;
        width: 100%;
        height: 100%;
      }
      .loader{
        border: 0 solid transparent;
        border-radius: 50%;
        width: 150px;
        height: 150px;
        position: absolute;
        top: calc(50vh - 75px);
        left: calc(50vw - 75px);
      }
      .loader:before, .loader:after{
        content: "";
        border: 1em solid #ff5733;
        border-radius: 50%;
        width: inherit;
        height: inherit;
        position: absolute;
        top: 0;
        left: 0;
        animation: loader 2s linear infinite;
        opacity: 0;
      }
      .loader:before{
        animation-delay: .5s;
      }
      @keyframes loader{
        0%{
          transform: scale(0,0);
          opacity: 0;
        }
        50%{
          opacity: 1;
        }
        100%{
          transform: scale(1,1);
          opacity: 0;
        }
      }
      *{
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        scroll-behavior: smooth;
      }
      .container-fluid1{
        width: 100%;
      }
      .logo{
        background-color: rgba(230,230,230,0.5);
      }
      .logo .head1{
        text-align: center;
        font-family: Raleway;
        letter-spacing: 3px;
        font-size: 3em;
        display: inline-block;
        padding: 10px 0px;
        cursor: pointer;
        animation: glow 1s ease-in-out infinite alternate;
      }

      @keyframes glow{
        from{
          color: #282829;
          text-shadow: 0 0 10px #222222; 
        }
        to{
          color: black;
          text-shadow: 0 0 20px #767676;
        }
      }
      .sec13 ul{
      list-style: none;
      }
      .sec13 ul li{
        display: inline-block;
        margin: 15px 5px 0px 5px;
      }
      .sec13 ul li:first-child a{
        color: #dcdcdc;
        display: inline-block;
        padding: 10px 15px;
        background-color: grey;
        border-radius: 50%;
        transition: 0.4s;
      }
      .sec13 ul li a{
        color: #dcdcdc;
        display: inline-block;
        padding: 10px 12px;
        background-color: grey;
        border-radius: 50%;
        transition: 0.4s;
      }
      .sec13 ul li:nth-child(1) a:hover{
        background-color: #3b5998;
        color: white;
      }
      .sec13 ul li:nth-child(2) a:hover{
        background-color: #00acee;
        color: white;
      }
      .sec13 ul li:nth-child(3) a:hover{
        background-color: #ea4335;
        color: white;
      }
      .sec13 ul li:nth-child(4) a:hover{
        background-color: #0e76a8;
        color: white;
      }
      .sec13 ul li:nth-child(5) a:hover{
        background-color: #ea4c89;
        color: white;
      }
      .register .login,.register .register1{
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s;
        color: #303030;
        padding: 10px 12px;
        font-size: 1.3em;
      }
      .register .login:hover, .register .register1:hover{
        color: white;
        background-color: grey;
        border-radius: 20px;
        transform: scale(1.1,1.1);
      } 
      .border-btm{
        border-bottom: 1px solid #e5e5e5; 
      }
      .box-shadow{
        box-shadow: 0 0 0.75rem rgba(0,0,0,0.25);
      }
      .info{
        width: 40%;
        padding: 26px 20px;
      }
      strong{
        font-size: 1.2em;
        margin-bottom: 8px;
      }
      .info p{
        color: silver;
        line-height: 1.5;
      }
      .links1{
        width: 60%;
      }
      .links1 .link1,.links1 .link2,.links1 .link3{
        padding: 26px 0px 15px 0px;
      }
      .link1 ul,.link2 ul,.link3 ul{
        list-style: none;
      }
      .link1 ul li, .link2 ul li,.link3 ul li{
        padding-bottom: 8px;
        color: silver;
      }
      .link1 ul li a,.link2 ul li a,.link3 ul li a{
        text-decoration: none;
        transition: 0.4s;
        color: silver;
      }
      .link1 ul li a:hover,.link2 ul li a:hover,.link3 ul li a:hover{
        color: gold;
      }
      .link3 ul li i{
        margin-right: 5px;
      }
      .sec12{
        border-bottom: 2px solid #555555;
      }
      .sec12 p{
        font-size: 1.5em;
        color: silver;
        display: inline-block;
      }
      .sec12 a{ 
        text-transform: uppercase;
        display: inline-block;
        text-decoration: none;
        color: white;
        font-size: 1.2em;
        margin: 17px 0px 17px 10px;
        padding: 10px 15px;
        border-radius: 20px;
        background-color: rgb(255,69,0);
        transition: 0.4s;  
      }
      .sec12 a:hover{
        background-color: skyblue;
        color: black;
      }
      .sec134 ul{
        list-style: none;
        margin-bottom: 0px;
      }
      .sec134 ul li{
        display: inline-block;
        margin: 25px 5px 25px 5px;
      }
      .sec134 ul li:first-child a{
        color: silver;
        display: inline-block;
        padding: 15px 20px;
        background-color: #525960;
        border-radius: 50%;
        transition: 0.4s;
      }
      .sec134 ul li a{
        color: silver;
        display: inline-block;
        padding: 15px 17px;
        background-color: #525960;
        border-radius: 50%;
        transition: 0.4s;
      }
      .sec134 ul li:nth-child(1) a:hover{
        background-color: #3b5998;
        color: white;
      }
      .sec134 ul li:nth-child(2) a:hover{
        background-color: #00acee;
        color: white;
      }
      .sec134 ul li:nth-child(3) a:hover{
        background-color: #ea4335;
        color: white;
      }
      .sec134 ul li:nth-child(4) a:hover{
        background-color: #0e76a8;
        color: white;
      }
      .sec134 ul li:nth-child(5) a:hover{
        background-color: #ea4c89;
        color: white;
      }
      .sec2{
        background-color: black;
        padding: 25px 0px 15px 0px;
      }
      .sec2 p{
        color: grey; 
        position: relative;
      }
      .sec2 p a{
        text-decoration: none;
        color: grey;
        transition: 0.3s;
      }
      .sec2 p::after{
        content: "";
        display: block;
        width: 0;
        height: 2px;
        background-color: yellow;
        position: absolute;
        right: 0;
        bottom: -10px;
        transition: all 0.5s;
        transition-timing-function: ease-out;

      }
      .sec2 p a:hover{
        color: gold;
        font-weight: bold;
      }
      .sec2 p:hover::after{
        width: 100%;
      }

      .to-top{
        background-color: orange;
        position: fixed;
        bottom: 800px;
        right: 32px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 32px;
        color: white;
        text-decoration: none;
        opacity: 0;
        cursor: pointer;
        box-shadow: 0 0 0.75rem rgba(210,105,30,0.5);
        transition: all 0.4s ease-in;
      }
      .to-top.active{
        bottom: 30px;
        opacity: 1;
      }
      .to-top:hover{
        transform: scale(1.1,1.1);
        text-decoration: none;
        color: white;
      }
      .form1{
        background-color: white;
        width: 350px;
        margin-top: -60px;
      }
      .form1 .head1{
        background-image: linear-gradient(to bottom left, #f9484a, #fbd72b );
      }
      .head1 p{
      color: white;
      text-align: center;
      font-size: 1.3em;
      padding: 70px 0px 30px 0px;
    }
      .div11,.div12,.div13,.div14{
      position: relative;
    }
    .name1{
      display: block;
      width: 80%;
      margin: 50px auto 35px auto;
      padding: 10px 0px;
      border: none;
      border-bottom: 2px solid #d4d4d4; 
      transition: all 0.3s;
    }
    .email1,.pass2{
      display: block;
      width: 80%;
      margin: 35px auto 15px auto;
      padding: 10px 0px;
      border: none;
      border-bottom: 2px solid #d4d4d4; 
      transition: all 0.3s;
    }
    .pass1{
      display: block;
      width: 80%;
      margin: 25px auto 15px auto;
      padding: 10px 0px;
      border: none;
      border-bottom: 2px solid #d4d4d4; 
      transition: all 0.3s;
    }
    .name1:focus,.email1:focus,.pass1:focus,.pass2:focus{
      outline: none;
      border-bottom: 2px solid orange; 
    }
    .name1:not(:focus):valid,.email1:not(:focus):valid,.pass1:not(:focus):valid,.pass2:not(:focus):valid{
      outline: none;
      border-bottom: 2px solid orange; 
    }
    .label11,.label12,.label13,.label14{
      font-size: 14px;
      position: absolute;
      top: 5px;
      left: 35px;
      color: #b4b4b4;
      transition: all 0.3s;
    }
    .name1:focus ~ .label11,.email1:focus ~ .label12,.pass1:focus ~ .label13,.pass2:focus ~ .label14{
      top: -10px;
      left: 30px;
      font-size: 0.8em;
      color: orange;
    }
    .name1:not(:focus):valid ~ .label11,.email1:not(:focus):valid ~ .label12,.pass1:not(:focus):valid ~ .label13,.pass2:not(:focus):valid ~ .label14{
      top: -10px;
      left: 30px;
      font-size: 0.8em;
      color: orange;
    }
    .radio1{
      width: 80%;
      margin-top: 35px;
    }
    .terms{
      width: 80%;
      margin-top: 20px;
    }
    .male1,.female1,.other1,.radio1 span{
      color: grey;
      font-size: 0.9em;
      transition: all 0.3s;
    }
    .other:checked ~ .other1,.male:checked ~ .male1,.female:checked ~ .female1{
      font-size: 1em;
      color: orange;
    }
    .terms11{
      color: grey;
      font-size: 13px;
    }
    .terms11 a{
      text-decoration: none;
      color: grey;
      font-weight: bold;
      transition: all 0.3s;
    }
    .terms11 a:hover{
      text-decoration: none;
      color: black;
    }
    .button1{
      margin: 40px 0px 30px 0px;
      width: 80%;
    }
    .button1 input[type="submit"]{
      background-color: #333333;
      color: white;
      padding: 12px 25px; 
      border-radius: 25px;
      border: none;
      font-size: 12px;
      box-shadow: 0px 3px 0.3rem rgba(0,0,0,0.5);
      cursor: pointer;
      transition: all 0.3s;
    }
    .button1 input[type="submit"]:hover{
      transform: scale(1.1,1.1);
      box-shadow: 5px 5px 0.3rem rgba(0,0,0,0.25);
      outline: none;
    }
    .button1 p{
      font-size: 12px;
      color: grey;
    }
    .button1 p a{
      font-weight: bold;
    }
    .button1 p a:hover{
      text-decoration: none;
    }
    .pass{
      position: absolute; 
      right: 10%; 
      top: 15px;
      color: #ccc;
      cursor: pointer;
      transition: all 0.3s;
    }
    .pass.active{
      color: orange;
    }
      @media screen and (max-width: 1024px){
        .logo .head1{
          font-size: 2.5em;
        }
      }
      @media screen and (max-width: 769px){
        .sec13{
          display: none;
        }
        .logo .head1{
          font-size: 1.5em;
          letter-spacing: 2px;
        }
        .register .login,.register .register1{
          font-size: 1em;
        }
        .info{
          width: 100%;
          padding: 30px 25px;
        }
        .links1{
          width: 100%;
        }
      }
      @media screen and (max-width: 575px){
        .links1{
          text-align: center;
        }
      }
      @media screen and (max-width: 500px){
        .logo .head1{
          font-size: 1em;
          margin-top: 7px;
          letter-spacing: 0px;
        }
        .register .login,.register .register1{
          padding: 5px 6px; 
          margin-top: 2px;
        }
        .register .login:hover, .register .register1:hover{
          transform: scale(1.05,1.05);
        }
        .brand{
          margin: 25px auto 20px auto;
        }
        .brand img{
          width: 80%;
          height: auto;
        }
        .quote{
          font-size: 1em;
        }
      }
    </style>
</head>
<body onload="show();">
  <div class="loader_bg" id="loader_bg">
    <div class="loader">
    </div>
  </div>
  <div class="main" data-aos="fade-in" data-aos-delay="200" data-aos-duration="1000">
    <a name="home"></a>
  <header>
    <div class="logo d-flex flex-md-row flex-row-reverse justify-content-around align-items-center border-btm box-shadow">
      <div class="register">
        <a href="login.php" class="login">Login</a><span> | </span><a href="signup.php" class="register1">Register</a>
      </div>
      <span class="head1" onclick="home();">FLAVOURZILLA</span>
      <div class="sec13">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
      </div>
    </div>
  </header>
  <img src="images/user.png" class="d-block mx-auto mt-5" style="width: 200px; height: 200px; z-index: 10;">
  <div class="form1 mx-auto mb-5 shadow">
      <div class="head1">
        <p>LOGIN HERE</p>
      </div>
      <div class="content1">
        <form name="f1" method="post" action="login.php">
          <div class="div12">
            <input type="text" name="userid" id="userid" class="email1" required>
            <label for="userid" class="label12">Enter User ID</label>
          </div>
          <div class="div13">
            <i class="fa fa-eye pass" id="eye"></i>
            <input type="password" name="pass1" id="pass1" class="pass1" required>
            <label for="pass1" class="label13">Enter Password</label>
          </div>
          <div class="terms mx-auto">
            <p class="terms11 text-right">Forgot <a href="#">Password?</a></p>
          </div>
          <div class="button1 d-flex flex-row justify-content-between align-items-center mx-auto pb-4">
            <input type="submit" value="LOGIN" name="loginUser">
            <p class="mt-2">Don't have an Account ? <a href="signup.php">Signup</a></p>
          </div>
        </form>
      </div>
    </div>
  <footer>
    <section class="bg-dark">
      <section class="d-flex flex-md-row flex-column" style="border-bottom: 2px solid grey;">
        <section class="info">
          <strong class="d-block text-white">ABOUT</strong>
          <p align="justify">FLAVOURZILLA is a food oriented website which will provide a wide range of food recipe to the users. The target audience are the food lovers, youngsters (who cooks their own food), household peoples and many more. All the recipes will be divided in three main categories i.e. Meal Timing, Ingredients, Cuisine and sub categories inside it which will give the initial flow of direction to the user.</p>
        </section>
        <section class="links1 d-flex flex-sm-row flex-column justify-content-around">
          <section class="link1">
            <strong class="d-block text-white">CATEGORIES</strong>
            <ul>
              <li><a href="mealtime.php">Meal Timings</a></li>
              <li><a href="ingredient.php">Ingredients</a></li>
              <li><a href="cuisine.php">Cuisine</a></li>
            </ul>
          </section>
          <section class="link2">
            <strong class="d-block text-white">QUICK LINKS</strong>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Terms and Condition</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </section>
          <section class="link3">
            <strong class="d-block text-white">CONTACT</strong>
            <ul>
              <li><i class="fa fa-home"></i><span> Mathura, India</span></li>
              <li><i class="fa fa-envelope"></i><span>Flavourzilla@gmail.com</span></li>
              <li><i class="fa fa-mobile"></i><span>Mobile: +91-XXXXXXXXXX</span></li>
              <li><i class="fa fa-facebook-official"></i><a href="#">flavourzillaindia</a></li>
            </ul>
          </section>
        </section>
      </section>
      <section class="sec12">
        <center>
          <p>Register For Free</p>
          <a href="signup.php">Sign up!</a>
        </center>
      </section>
      <section class="sec134">
        <center>
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </center>
      </section>
    </section>
    <section class="sec2 d-flex justify-content-center">
      <p align="center">Copyright &copy; All Rights Reserved by <a href="#">FLAVOURZILLA</a></p>
    </section>
  </footer>
  <a href="#home" class="to-top">
    <i class="fas fa-chevron-up"></i>
</a>
</div>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
    function home(){
      window.location.href = "home.php";
    }

    function show(){
      var x = document.getElementById("loader_bg");
      x.style.display = "none";
    }


    window.addEventListener('scroll',function(){
      var scroll = document.querySelector('.to-top');
      scroll.classList.toggle("active", window.scrollY > 500);
    })


    var pwd = document.getElementById("pass1");
    var eye = document.getElementById("eye");

    eye.addEventListener('click',function(){
      eye.classList.toggle("active");
      (pwd.type == 'password')? pwd.type='text' : pwd.type='password';
    })
  </script>
</body>
</html>

<?php

include_once 'connection.php';

if (isset($_POST['loginUser'])) {
  $userid = $_POST['userid'];
  $password = $_POST['pass1'];


  $check_user = "SELECT * from user where userid = '$userid' and password = '$password'";
  $run = mysqli_query($conn,$check_user);

  if(mysqli_num_rows($run)==0){
     echo "<script>swal({
                    title: 'Error!',
                    text: 'User does not exist, Please try Again!',
                    icon: 'warning',
                    button: 'Retry!',
                  });
          </script>";  
    exit();
  }
  else{
    
    echo"<script>window.open('welcome.php','_self')</script>";
    $_SESSION['uid']=$userid;
  }

}
?>