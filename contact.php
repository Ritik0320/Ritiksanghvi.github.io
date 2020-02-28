
 
 

 

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome-free-5.12.0-web/css/all.css">

    <title>Sanghvi impex/Contact_Us</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="topheader">
      <div class="container">
        <div class="row">
          <div class="col-12 text-right">
            <a href=""><i class="fas fa-mobile-alt"></i>(+91)7990459151</a>
              <a href=""><i class="fas fa-at"></i>sanghvi.impex03@gmail.com</a>
          </div>
        </div>
      </div>
      </div>
      <section class="breadcrumps-section">
        <div class="container p-1 p-sm-3">
          <div class="row">
            <div class="col-12">
              <h2>Contact Us</h2>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="default.html">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
              </ol>
            </div>
          </div>
        </div>
        </section> 
      <section class="form-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
             <?php
              $Msg='';
              if(isset($_GET['error']))
              {
                $Msg="Please fill the details";
                echo '<div class="alert alert-danger">'.$Msg.'</div>';
              }
              if(isset($_GET['success']))
              {
                $Msg="Your Requirement has been sent";
                echo '<div class="alert alert-success">'.$Msg.'</div>';
              }
              ?> 
          
              <form id="contact" action="storingdata.php" method="POST">
                <label>Email-id*</label>
                <fieldset>
                <input  name="email" class="form-control" type="email" autocomplete="on" required >
                </fieldset>
                <br>
                <label>Full Name*</label>
               <input name="fname"  type="text" class="form-control"  autocomplete="on" required  >
                <br>
                <label>Company Name*</label>
               <input name="cname" type="text" class="form-control" autocomplete="on" required >
                <br>
               <label>Post your Requirements here</label>
            <textarea name="message" class="form-control" type="text" rows="3" required>
              </textarea>
              <br>
           <button class="btn btn-success" name="btn-send">Send</button>
           <button class="btn btn-default" name="btn-Reset" type="reset">Reset</button>
           
          
            <br><br>
            </div>
       



          <div class="col-md-6 address">
            <h5>Call Us</h5>
            <p><a href="#"><i class="fas fa-phone"></i>+(91) 9664101191</a><br></p>
            <h5>Email</h5>
            <p><a href="#"><i class="fas fa-envelope"></i> sanghvi.impex03@gmail.com</a><br><br></p>
            <h5>Working hours :</h5>
            <p>Mon-Fri : 9am to 6pm(IST)<br><br></p>
            <h5>Address :</h5>
            <p>B/307,JP Bldg 1 near JH Poddar high school , Bhayandar(w)</p>
          </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container-fluid">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609845754!2d72.74109975285954!3d19.082197839427938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1580834784729!5m2!1sen!2sin" width="100%" height="400px" frameborder="0" style="border:0;"></iframe>"
        </div>
      </section>
      <footer class="full-footer">
        <div class="container top-footer p-md-3 p-3">
          <div class="row">
            <div class="col-md-4 pl-4 pr-4">
               <h2 style="color:wheat;">Sanghvi Impex</h2>
              <h5 style="color:white;">Products</h5>
              <a href="" style="color: whitesmoke;">Solvents</a><br>
              <a href="" style="color: whitesmoke;">pharmaceuticals</a><br>
              <a href="" style="color: whitesmoke;">Resins</a><br>
            </div>
            <div class="col-md-4 pl-4 pr-4">
              <h2 style="color:wheat;">Contact Us</h2>
              <a href="" style="color: whitesmoke;"><i class="fas fa-mobile-alt"></i>(+91)7990459151</a><br>
              <a href="" style="color: whitesmoke;"><i class="fas fa-at"></i>sanghvi.impex03@gmail.com</a><br>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609929998!2d72.74109898741976!3d19.082197838849726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1580559655302!5m2!1sen!2sin" frameborder="0"></iframe>
              </div>
              </div>
              <div class="col-md-4 pl-4 pr-4 text-center" style="margin-top:5px;">
                <h2 style="color:wheat;">"Quality Is Our Motto"</h2>
                <img src="pictures/benzene1.png" style="width: 175px;">
               </div>
          </div>
        </div>
        <div class="container-fluid bottom-footer">
          <div class="row">
            <div class="col-12 text-center">
              <p>Copyrights 2019 - All rights reserved</p>
            </div>
          </div>
        </div>
      </footer>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Bootstrap/js/popper.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
?>