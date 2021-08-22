<?php  
session_start();  
  
if(!$_SESSION['uid'])  
{  
  
    header("Location: login.php");
}  


include_once 'connection.php';

if (isset($_POST['add'])) {
     $name = $_POST['name'];
     $i1 = $_POST['i1'];
     $i2 = $_POST['i2'];
     $i3 = $_POST['i3']; 
     $i4 = $_POST['i4'];
     $i5 = $_POST['i5'];
     $i6 = $_POST['i6'];
     $i7 = $_POST['i7'];
     $i8 = $_POST['i8'];

     $s1 = $_POST['s1'];
     $s2 = $_POST['s2'];
     $s3 = $_POST['s3'];
     $s4 = $_POST['s4'];
     $s5 = $_POST['s5'];
     $s6 = $_POST['s6'];
     $s7 = $_POST['s7'];

     $category =  $_POST['category'];
     $category1 = $_POST['category1'];

     $upload = $_POST['upload'];
     $video = $_POST['video'];



    $files = $_FILES['img'];

    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];

    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));

    $fileext1 = array('png','jpg','jpeg');

    if(in_array($filecheck, $fileext1)){
      $location = 'images/'.$filename;
      move_uploaded_file($filetmp, $location);


      $insert = "INSERT INTO recipe(name,image,ingredient1,ingredient2,ingredient3,ingredient4,ingredient5,ingredient6,ingredient7,ingredient8,step1,step2,step3,step4,step5,step6,step7,category,category1,uploadedby,video,likes,dislikes) VALUES ('$name','$location','$i1','$i2','$i3','$i4','$i5','$i6','$i7','$i8','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$category','$category1','$upload','$video','0','0')";

      $runn = mysqli_query($conn,$insert);

      if ($runn) {
        echo "<script>window.open('welcome.php','_self')</script>";
      }
      else{
        echo "<script>swal({
                    title: 'Error!',
                    text: 'Some Error occured! Try Again',
                    icon: 'warning',
                    button: 'Retry!',
                  });
          </script>";
      }
    }
    else{
      echo "<script>swal({
                    title: 'Error!',
                    text: 'Image is not of the Required Format (png, jpg, jpeg)',
                    icon: 'warning',
                    button: 'Retry!',
                  });
          </script>";
    }
    }   
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
      .register .user,.register .logout{
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s;
        color: #303030;
        padding: 10px 12px;
        font-size: 1.3em;
      }
      .register .logout:hover{
        color: white;
        background-color: grey;
        border-radius: 20px;
        transform: scale(1.1,1.1);
      } 
      .register .user:hover{
        transform: scale(1.1,1.1);
      }
      .border-btm{
        border-bottom: 1px solid #e5e5e5; 
      }
      .box-shadow{
        box-shadow: 0 0 0.75rem rgba(0,0,0,0.25);
      }
      .box-shadow1{
        box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
      }
      .brand{
        width: 93%;
        margin: 35px auto 30px auto;
        background-color: #f6f6f6;
        background-image: linear-gradient(315deg, #f6f6f6 0%, #e9e9e9 74%);
        box-shadow: 0px 0px 0.75rem rgba(0,0,0,0.25);
        transition: all 0.8s;
      }
      .brand:hover{
        transform: scale(1.05,1.05) !important;
        box-shadow: 0px 0px 0.75rem rgba(0,0,0,0.5);
      }
      .brand img{
        width: 50%;
        height: auto;
        margin-top: 20px;
      }
      .links{
        display: inline-block;
        width: 100%;
        color: #ececec;
        text-decoration: none;
        padding: 15px 30px;
        font-size: 1.1em;
        transition: all 0.4s;
      }
      .links:hover{
        transform: scale(1.1,1.1);
        text-decoration: none;
        background-color: #ececec;
        color: black;
      }
      .dropdown-menu{
        max-height: 200px;
        overflow-y: auto;
      }
      .img1{
        width: 100%;
        height: auto;
      }
      .quote{
        font-family: Bilbo;
        font-weight: bold;
        font-size: 2em;
        letter-spacing: 3px;
        text-shadow: 2px 2px 4px grey;
      }
      .img2{
        width: 100%;
        height: 200px;
      }
      .card{
        width: 90%;
      }
      .inner{
        overflow: hidden;
      }
      .inner img{
        cursor: pointer;
        transition: all 1s ease;
      }
      .inner:hover img{
        transform: scale(1.1,1.1);
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
      .menulines{
      font-size: 30px;
      cursor: pointer;
      margin-left: 20px;
      border-radius: 5px;
      padding: 0px 5px;
    }
    .sideNav{
      height: 100%;
      width: 0;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000000;
      background-color: #485461;
      background-image: linear-gradient(315deg, #485461 0%, #28313b 74%);
      box-shadow: 0 0 0.75rem rgba(0,0,0,0.25);
      overflow-x: hidden;
      padding-top: 60px;
      transition: all 0.5s;
    }
    .sideNav .a1{
      text-decoration: none;
      font-size: 20px;
      color: lightgrey;
      display: block;
      padding: 30px 0 10px 20px; 
      transition: all 0.6s;
    }
    .sideNav .a1:hover{
      color: rgb(255,255,255);
    }
    .closebtn{
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 40px!important;
      padding-top: 10px!important;
    }
    .main-div{
      width: 90%;
      background-color: rgba(0,0,0,0.5);
      border-radius: 20px;
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
        .quote{
          font-size: 1.5em;
        }
        .info{
          width: 100%;
          padding: 30px 25px;
        }
        .links1{
          width: 100%;
        }
        .main-div{
          width: 98%;
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
        .menulines{
          margin-left: 10px;
        }
        .register .user,.register .logout{
          font-size: 0.8em;
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

    <div class="logo d-flex flex-row align-items-center border-btm box-shadow">
      <span class="menulines" onclick="openNav()">&#9776;</span>
      <div class="d-flex flex-md-row flex-row-reverse align-items-center" style="width: 92%;">
      <div class="register mr-md-auto ml-auto">
        <a href="#" class="user" title="Tap on User ID to View Details"><strong><?php echo $_SESSION['uid']; ?></strong></a><span> | </span><a href="javascript:void(0)" class="logout" onclick="logout();">Logout</a>
      </div>
      <span class="head1" onclick="home();">FLAVOURZILLA</span>
      <div class="sec13 ml-auto">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  </header>
  <div class="sideNav" id="mysideNav">
    <a href="javascript:void(0)" class="closebtn a1" onclick="closeNav()">&times;</a>
    <a href="welcome.php" class="a1"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
    <a href="mealtime1.php" class="a1"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Meal Time</a>
    <a href="cuisine1.php" class="a1"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Cuisine</a>
    <a href="ingredient1.php" class="a1"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Ingredients</a>
    <a href="addrecipe.php" class="a1"><i class="fa fa-first-order" aria-hidden="true"></i>&nbsp;Add Recipe</a>
    
  </div>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top mb-sm-5 mb-3">
        <button class="navbar-toggler border ml-auto" data-toggle="collapse" data-target="#collapse_target" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapse_target">
        <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item">
                <a class="links" href="#home"><i class="fas fa-home mr-1"></i>HOME</a>
            </li>
            <li class="nav-item">
                <a class="links" href="#about"><i class="fas fa-user mr-1"></i>ABOUT US</a>
            </li>
            <li class="nav-item dropdown">
                <a class="links dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="fa fa-cutlery mr-1" aria-hidden="true"></i>MEAL TIME</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a href="breakfast1.php" class="dropdown-item">Breakfast</a>
                  <div class="dropdown-divider"></div>
                  <a href="lunch1.php" class="dropdown-item">Lunch</a>
                  <div class="dropdown-divider"></div>
                  <a href="dinner1.php" class="dropdown-item">Dinner</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="links dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="fas fa-hamburger mr-1"></i>CUISINE</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a href="chinese1.php" class="dropdown-item">Chinese</a>
                  <div class="dropdown-divider"></div>
                  <a href="indian1.php" class="dropdown-item">Indian</a>
                  <div class="dropdown-divider"></div>
                  <a href="mexican1.php" class="dropdown-item">Mexican</a>
                  <div class="dropdown-divider"></div>
                  <a href="italian1.php" class="dropdown-item">Italian</a>
                  <div class="dropdown-divider"></div>
                  <a href="japanese1.php" class="dropdown-item">Japanese</a>
                  <div class="dropdown-divider"></div>
                  <a href="american1.php" class="dropdown-item">American</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="links dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="fas fa-bread-slice mr-1"></i>INGREDIENTS</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a href="bread1.php" class="dropdown-item">Bread</a>
                  <div class="dropdown-divider"></div>
                  <a href="corn1.php" class="dropdown-item">Corn</a>
                  <div class="dropdown-divider"></div>
                  <a href="wheat1.php" class="dropdown-item">Wheat</a>
                  <div class="dropdown-divider"></div>
                  <a href="fruit1.php" class="dropdown-item">Fruits</a>
                </div>
            </li>
        </ul>
    </div>
    </nav>
    <div class="container-fluid mb-md-5 mb-3">
      <h1 class="display-4 mx-auto mt-5 text-center">Add Your Recipe Here</h1>
      <small class="d-block lead text-center mb-5">(Fill out the given form carefully to add your Recipe in the required Category)</small>
      <div class="main-div mx-auto my-5 p-5">
        <form method="post" action="addrecipe.php" enctype="multipart/form-data">
          <div class="row form-group">
            <div class="col-md-6">
              <label for="name" class="text-white d-block">Name of the Recipe</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">@</span>
              </div>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter name of the Recipe" required>
            </div>
          </div>
            <div class="col-md-6">
              <label for="inputGroupFile01" class="text-white">Choose Image</label>
              <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile01" name="img" required>
              </div>
          </div>
          </div>
          <div class="row mt-3 form-group">
            <fieldset>
              <legend style="color: lightgrey;">Ingredients :</legend>
              <div class="row">
                <div class="col-md-6">
                  <label for="i1" class="text-white d-block">Ingredient 1</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">@</span>
                    </div>
                    <input type="text" name="i1" class="form-control" id="i1" placeholder="Enter Engridient 1" required>
                  </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                  <label for="i2" class="text-white d-block">Ingredient 2</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">@</span>
                    </div>
                    <input type="text" name="i2" class="form-control" id="i2" placeholder="Enter Engridient 2" required>
                  </div>
                </div>
                <div class="col-md-6 mt-4">
                  <label for="i3" class="text-white d-block">Ingredient 3</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">@</span>
                    </div>
                    <input type="text" name="i3" class="form-control" id="i3" placeholder="Enter Ingredient 3" required>
                  </div>
                </div>
                <div class="col-md-6 mt-4">
                  <label for="i4" class="text-white d-block">Ingredient 4</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">@</span>
                    </div>
                    <input type="text" name="i4" class="form-control" id="i4" placeholder="Enter Ingredient 4" required>
                  </div>
                </div>
                <div class="col-md-6 mt-4">
                  <label for="i5" class="text-white d-block">Ingredient 5</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">@</span>
                    </div>
                    <input type="text" name="i5" class="form-control" id="i5" placeholder="Enter Ingredient 5" required>
                  </div>
                </div>
                <div class="col-md-6 mt-4">
                  <label for="i6" class="text-white d-block">Ingredient 6</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">@</span>
                    </div>
                    <input type="text" name="i6" class="form-control" id="i6" placeholder="Enter Ingredient 6" required>
                  </div>
                </div>
                <div class="col-md-6 mt-4">
                  <label for="i7" class="text-white d-block">Ingredient 7</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">@</span>
                    </div>
                    <input type="text" name="i7" class="form-control" id="i7" placeholder="Enter Ingredient 7" required>
                  </div>
                </div>
                <div class="col-md-6 mt-4">
                  <label for="i8" class="text-white d-block">Ingredient 8</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">@</span>
                    </div>
                    <input type="text" name="i8" class="form-control" id="i8" placeholder="Enter Ingredient 8" required>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
          <div class="row form-group">
            <fieldset>
              <legend style="color: lightgrey;">Direction :</legend>
              <div class="row">
                <div class="col-md-6">
                  <label for="s1" class="text-white d-block">Step 1</label>
                  <textarea rows="6" class="form-control" name="s1" id="s1" required></textarea>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                  <label for="s2" class="text-white d-block">Step 2</label>
                  <textarea rows="6" class="form-control" name="s2" id="s2" required></textarea>
                </div>
                <div class="col-md-6 mt-4">
                  <label for="s3" class="text-white d-block">Step 3</label>
                  <textarea rows="6" class="form-control" name="s3" id="s3" required></textarea>
                </div>
                <div class="col-md-6 mt-4">
                  <label for="s4" class="text-white d-block">Step 4</label>
                  <textarea rows="6" class="form-control" name="s4" id="s4" required></textarea>
                </div>
                <div class="col-md-6 mt-4">
                  <label for="s5" class="text-white d-block">Step 5</label>
                  <textarea rows="6" class="form-control" name="s5" id="s5" required></textarea>
                </div>
                <div class="col-md-6 mt-4">
                  <label for="s6" class="text-white d-block">Step 6</label>
                  <textarea rows="6" class="form-control" name="s6" id="s6" required></textarea>
                </div>
                <div class="col-md-6 mt-4">
                  <label for="s7" class="text-white d-block">Step 7</label>
                  <textarea rows="6" class="form-control" name="s7" id="s7" required></textarea>
                </div>
                
              </div>
            </fieldset>
          </div>
          <div class="row form-group">
            <div class="col-md-6 mt-4">
              <label for="category" class="text-white d-block">Select Category :</label>
              <select class="form-control" name="category" id="category" onchange="mycat(this.value);" required>
                <option value="Select">Select Option</option>
                <option>Meal Time</option>
                <option>Cuisine</option>
                <option>Ingredient</option>
              </select>
            </div>
            <div class="col-md-6 mt-4">
              <label for="category1" class="text-white d-block">Select Sub-Category :</label>
              <select class="form-control" name="category1" id="category1" required>
                <option>Select Option</option>
              </select>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-6 mt-4">
              <label for="upload" class="text-white d-block">Uploaded By :</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">@</span>
              </div>
              <input type="text" name="upload" class="form-control" id="upload" placeholder="Name of the Contributer to be displayed with Recipe" required>
            </div>
            </div>
            <div class="col-md-6 mt-4">
              <label for="video" class="text-white d-block">Video Link :</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">@</span>
              </div>
              <input type="text" name="video" class="form-control" id="video" placeholder="Youtube Video Link (Embed Link)" required>
            </div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-6 mt-5">
              <input type="submit" value="Add Recipe" name="add" class="btn btn-success btn-block">
            </div>
            <div class="col-md-6 mt-5">
              <input type="reset" value="Clear" name="reset" class="btn btn-danger btn-block">
            </div>          
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
              <li><a href="mealtime1.php">Meal Timings</a></li>
              <li><a href="ingredient1.php">Ingredients</a></li>
              <li><a href="cuisine1.php">Cuisine</a></li>
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
              <li><i class="fa fa-mobile"></i><span>Mobile:+91-XXXXXXXXXX</span></li>
              <li><i class="fa fa-facebook-official"></i><a href="#">flavourzillaindia</a></li>
            </ul>
          </section>
        </section>
      </section>
      <section class="sec12">
        <center>
          <p>Register For Free</p>
          <a href="#">Sign up!</a>
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
      window.location.href = "welcome.php";
    }
    function openNav(){
      document.getElementById("mysideNav").style.width="250px";
    }
    function closeNav(){
      document.getElementById("mysideNav").style.width="0";
    }
    function show(){
      var x = document.getElementById("loader_bg");
      x.style.display = "none";
    }

    function mycat(data){
      const ajaxreq = new XMLHttpRequest();
      ajaxreq.open('GET','http://localhost/flavourzilla/getdata.php?selectvalue='+data,'TRUE');
      ajaxreq.send();

      ajaxreq.onreadystatechange = function(){
        if (ajaxreq.readyState == 4 && ajaxreq.status == 200) {
          document.getElementById('category1').innerHTML = ajaxreq.responseText;
        }
      }
    }

    window.addEventListener('scroll',function(){
      var scroll = document.querySelector('.to-top');
      scroll.classList.toggle("active", window.scrollY > 500);
    })

    function logout(){
      window.location.href = "logout.php";
    }
  </script>
</body>
</html>