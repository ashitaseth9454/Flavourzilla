<?php  
session_start();  
  
if(!$_SESSION['uid'])  
{  
  
    header("Location: login.php");
} 

include_once 'connection.php'; 
  
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
    .nav1{
        display: none;
      }
      .aside{
        border-left: 2px solid #dcdcdc;
      }
      .list1,.list3{
        display: none;
      }
      .list1 a,.list2 a,.list3 a{
        text-decoration: none;
        color: #777777;
        transition: all 0.3s;
      }
      .list1 a:hover, .list2 a:hover,.list3 a:hover{
        color: #d4af37;
      }
      .div1,.div2,.div3{
        position: relative;
      }
      #heading1,#heading2,#heading3{
        cursor: pointer;
        transition: all 0.3s;
      }
      #heading1:hover,#heading2:hover,#heading3:hover{
        text-shadow: 0px 0px 5px grey;
      }
      .div1 i{
        position: absolute;
        top: 5px;
        left: 33%;
      }
      .div2 i{
        position: absolute;
        top: 5px;
        left: 23%;
      }
      .div3 i{
        position: absolute;
        top: 5px;
        left: 35%;
      }
      .img1{
        width: 24.6%;
        height: 180px;
      }
      .breakfast1{
        text-shadow: 0px 0px 5px grey;
      }
      .btn-search{
        margin-top: -5px;
      }
      @media screen and (max-width: 1130px){
        .img1{
          width: 23.5%;
          height: 160px;
        }
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
        .nav1{
          display: block;
        }
        .aside{
          display: none;
        }
        .img1{
          width: 23.5%;
          height: 140px;
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
        .img1{
          width: 23.5%;
          height: 120px;
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
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top mb-sm-5 mb-3 nav1">
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <?php  

    $query= "SELECT * FROM recipe WHERE category = 'Cuisine' and category1 = 'Japanese' ORDER BY id ASC";

    $query1= mysqli_query($conn, $query);
    if(mysqli_num_rows($query1)>0){
      while($row = mysqli_fetch_array($query1)){
        ?>
        <div class="col-md-4 col-lg-4 col-sm-12 my-2 my-5">
            <div class="card card1" data-aos="fade-in">
              <h6 class="card-title bg-info text-white p-2 text-uppercase text-center"> <?php echo $row['name'] ?>  </h6>
              
              <div class="card-body">
                <img src="<?php echo $row['image'] ?>" alt="phone" class="img-fluid mb-2" style="height: 200px;">
              </div>
              <div class="btn-group">
                <a style="text-decoration: none; display: block; width: 100%;" href="recipe1final.php?choose=<?php echo $row['name'] ?>"><input type="submit" name="btn1" class="btn btn-warning btn-block" value="View Recipe"></a>
              </div>
            </div>
        </div>




      <?php
      }
    }
    ?>
        </div>
      </div>
      <div class="col-md-3 aside">
        <div>
          <form method="get" action="search1.php">
          <input type="text" name="search" class="search form-control w-75 d-inline-block mt-4" id="search" placeholder="Search Recipes">
          <button type="submit" class="btn btn-info ml-1 btn-search" value="search" name="btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
        </div>
        <div class="div1 mt-4">
          <strong class="d-block" id="heading1"><span>Meal Time</span> <i class="fa fa-angle-down" id="down1" aria-hidden="true"></i>
</strong>
          <div class="list1 pl-2" id="list1">
            <a href="breakfast1.php" class="d-block">Breakfast</a>
            <a href="lunch1.php" class="d-block">Lunch</a>
            <a href="dinner1.php" class="d-block">Dinner</a>
          </div>
        </div>
        <div class="div2 mt-4">
          <strong class="d-block" id="heading2"><span>Cuisine</span> <i class="fa fa-angle-down" id="down2" aria-hidden="true"></i></strong>
          <div class="list2 pl-2" id="list2">
            <a href="chinese1.php" class="d-block">Chinese</a>
            <a href="indian1.php" class="d-block">Indian</a>
            <a href="mexican1.php" class="d-block">Mexican</a>
            <a href="italian1.php" class="d-block">Italian</a>
            <a href="japanese1.php" class="d-block">Japanese</a>
            <a href="american1.php" class="d-block">American</a>
          </div>
        </div>
        <div class="div3 my-4">
          <strong class="d-block" id="heading3"><span>Ingredients</span> <i class="fa fa-angle-down" id="down3" aria-hidden="true"></i></strong>
          <div class="list3 pl-2" id="list3">
            <a href="bread1.php" class="d-block">Bread</a>
            <a href="corn1.php" class="d-block">Corn</a>
            <a href="wheat1.php" class="d-block">Wheat</a>
            <a href="fruit1.php" class="d-block">Fruits</a>
          </div>
        </div>
      </div>
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
              <li><i class="fa fa-home"></i><span>Mathura, India</span></li>
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
    $(document).ready(function(){
      $("#heading1").click(function(){
        $("#list1").slideToggle(500);
      });
    });

    $(document).ready(function(){
      $("#heading2").click(function(){
        $("#list2").slideToggle(500);
      });
    });

    $(document).ready(function(){
      $("#heading3").click(function(){
        $("#list3").slideToggle(500);
      });
    });
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