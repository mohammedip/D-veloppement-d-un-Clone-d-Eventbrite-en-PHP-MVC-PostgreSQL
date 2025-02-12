<!DOCTYPE html>

<html lang="en">
<!-- Mirrored from demo.themewinter.com/html/exhibz/speakers-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 15:01:31 GMT -->
<head>
   <!-- Basic Page Needs ================================================== -->
   <meta charset="utf-8">
   <!-- Mobile Specific Metas ================================================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
   <!-- Site Title -->
   <title>Exhibit - Conference &amp; Event HTML Template</title>
   <!-- CSS
         ================================================== -->
   <!-- Bootstrap -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- FontAwesome -->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!-- Animation -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- magnific -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <!-- carousel -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- isotop -->
   <link rel="stylesheet" href="css/isotop.css">
   <!-- ico fonts -->
   <link rel="stylesheet" href="css/xsIcon.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
    
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            width: 400px;
        }
        .login-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2em;
        }
        .input-group {
            position: relative;
            margin-bottom: 30px;
        }
        .input-group input {
            width: 100%;
            padding: 15px;
            border: none;
            outline: none;
            background: #f5f5f5;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .input-group input:focus {
            background: #fff;
            box-shadow: 0 0 0 2px #4a00e0;
        }
        .input-group label {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        .input-group input:focus + label,
        .input-group input:valid + label {
            top: -10px;
            left: 10px;
            font-size: 14px;
            color: #4a00e0;
            background: white;
            padding: 0 5px;
        }
        .forgot-pass {
            text-align: right;
            margin-bottom: 20px;
        }
        .forgot-pass a {
            color: #666;
            text-decoration: none;
            font-size: 14px;
        }
        .forgot-pass a:hover {
            color: #4a00e0;
        }
        .btn-login {
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, #8e2de2, #4a00e0);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            background: linear-gradient(45deg, #7728bd, #3d00b3);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(74, 0, 224, 0.4);
        }
        .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
        .signup-link a {
            color: #4a00e0;
            text-decoration: none;
            font-weight: bold;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
   <div class="body-inner">
      <!-- Header start -->
  <?php require_once "header.php" ?>
      <!--/ Header end -->
      <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/hero_area/banner_bg.jpg)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Login ..</h2>
               <!-- <ol class="breadcrumb">
                  <li>
                     <a href="#">Exibit /</a>
                  </li>
                  <li>
                     Speakers II
                  </li>
               </ol> -->
            </div>
         </div><!-- Subpage title end -->
      </div><!-- Page Banner end -->
<!-- start login form -->
<div class="login-container" style="margin: auto; margin-top: 100px; margin-bottom: 100px;">
  <h2>Login</h2>
  <form>
      <div class="input-group">
          <input type="email" required>
          <label>Email</label>
      </div>
      <div class="input-group">
          <input type="password" required>
          <label>Password</label>
      </div>
      <div class="forgot-pass">
          <a href="#">Forgot Password?</a>
      </div>
      <button type="submit" class="btn-login">Login</button>
      <div class="signup-link">
          Don't have an account? <a href="register.html">Sign Up</a>
      </div>
  </form>
</div>
<!-- end login form -->
      <!-- ts footer area start-->
      <div class="footer-area">
         <!-- ts-book-seat start-->
    
         <!-- book seat  end-->
         <!-- footer start-->
        <?php require_once "footer.php" ?>
         <!-- footer end-->
         <div class="BackTo">
                  <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
              </div>
      </div>
      <!-- ts footer area end-->
    
      <!-- Javascript Files
            ================================================== -->
      <!-- initialize jQuery Library -->
      <script src="js/jquery.js"></script>
      <script src="js/popper.min.js"></script>
      <!-- Bootstrap jQuery -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Counter -->
      <script src="js/jquery.appear.min.js"></script>
      <!-- Countdown -->
      <script src="js/jquery.jCounter.js"></script>
      <!-- magnific-popup -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- carousel -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Waypoints -->
      <script src="js/wow.min.js"></script>
      <!-- isotop -->
      <script src="js/isotope.pkgd.min.js"></script>
      <!-- Template custom -->
      <script src="js/main.js"></script>
   </div>
   <!-- Body inner end -->
</body>
<!-- Mirrored from demo.themewinter.com/html/exhibz/speakers-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Aug 2024 15:01:31 GMT -->
</html>