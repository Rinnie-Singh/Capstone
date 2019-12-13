   <?php
$host = "localhost";
                        $dbusername = "root";
                        $dbpassword = "";
                        $dbname = "form";
                        
                        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                        if (mysqli_connect_error()){
                            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
                        }
                                if (isset($_POST['submit'])) {
                                    
                                    $title = $_POST["title"];
                                    $pname = rand(1000,10000)."-".$_FILES['title']['name'];
                                    $tname = $_FILES['file']['tmp_name'];
                                    $uploads_dir="/uploads";
                                    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
                                    
                                    $sql = "INSERT INTO fileup VALUES('$title','$pname')";
                                    if(mysqli_query($conn,$sql)){
                                        echo "done";
                                    }
                                    else
                                    {
                                        echo"error";
                                    }

                                }
                                ?>



   <!DOCTYPE html>
   <html lang="en">

   <head>
       <title>JobHub</title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="javascriptfile.js">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
    background-color: #f2e7db;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
   </head>

   <body>
       <div class="container-fluid">
           <div class="row">
               <div class="col-sm-3 ml-2"><a href="index.php"> <img src="images/logo.png" alt="logo" width="200px" height="100px"></a></div>
               <div class="col-sm-6">
                   <nav class="navbar navstyle navbar-expand-lg">
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                       </button>

                       <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <ul class="navbar-nav mr-auto">
                               <li class="nav-item active">
                                   <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="Aboutus.php">About Us</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="Contact_us.php">Contact Us</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="FAQ's.php">FAQ's</a>
                               </li>
                           </ul>
                       </div>
                   </nav>
               </div>
               <div class="col-sm-2 m-5 font-weight-bold" style="font-size: 20px">
                   <a href="Connect.php">Log in</a> |
                   <a href="signup.php">Sign up</a>
               </div>
           </div>

           <div class="row" style="padding:20px">
              
               <div class="col-md-12">

                 
<div class="container-fluid mt-5">
  <div class="container-fluid">
    <!-- Control the column width, and how they should appear on different devices -->
   
    <div class="row">
      <div class="col-sm-12">
        <form action="/action_page.php" style="border:2px solid black">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form></div>
    </div>
    <br>

  </div>
</div>




               </div>
                        </div>
           <div class="row">
               <div class="col-md-12" style="text-align: center">

                   <p>JOBHUB &copy;</p>
                   <p>Contact information: 2019 <a href="mailto:someone@example.com">info@jobhub.com</a>.</p>


               </div>


           </div>

       </div>
       <script>
           /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
           function myFunction() {
               document.getElementById("myDropdown").classList.toggle("show");
           }

           // Close the dropdown if the user clicks outside of it
           window.onclick = function(event) {
               if (!event.target.matches('.dropbtn')) {
                   var dropdowns = document.getElementsByClassName("dropdown-content");
                   var i;
                   for (i = 0; i < dropdowns.length; i++) {
                       var openDropdown = dropdowns[i];
                       if (openDropdown.classList.contains('show')) {
                           openDropdown.classList.remove('show');
                       }
                   }
               }
           }

       </script>
   </body>

   </html>
