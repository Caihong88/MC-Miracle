<!DOCTYPE html>
<html lang="en">

   <header>
     <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
       <div class="container">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand page-scroll" href="index.html">Foodshare</a>
         </div>
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav navbar-right">
             <li><a class="page-scroll" href="home.html">Home</a></li>
             <li><a class="page-scroll" href="home.html#impact">Impact</a></li>
             <li><a class="page-scroll" href="home.html#get-involved">Get Involved</a></li>
             <li><a class="page-scroll" href="home.html#contact-section">Contact Us</a></li>
             <li class="page-scroll"><a href="about.html">About Us</a></li>
           </ul>
         </div>
       </div>
      </nav>
    </header>

<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>
