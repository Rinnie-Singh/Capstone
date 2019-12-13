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
               <div class="col-md-2">
                   <div class="salary_box" style="margin-bottom: 10px">
                       <h4>Salary</h4>
                       <div class="form-single-column" role="group" aria-labelledby="label_6" data-component="checkbox">
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_0" name="q6_areasOf[]" value="Performance Coach">
                               <label id="label_input_6_0" for="input_6_0"> 5000 - 10000</label><br>
                           </span>
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_1" name="q6_areasOf[]" value="Account Manager">
                               <label id="label_input_6_1" for="input_6_1"> 10000 - 15000 </label>
                           </span><br>
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_2" name="q6_areasOf[]" value="Administrative">
                               <label id="label_input_6_2" for="input_6_2"> 15000 - 20000 </label><br>
                           </span>
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_3" name="q6_areasOf[]" value="Human Resources">
                               <label id="label_input_6_3" for="input_6_3"> 20000 - 25000 </label><br>
                           </span>
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_4" name="q6_areasOf[]" value="Sales">
                               <label id="label_input_6_4" for="input_6_4"> 25000 - 30000 </label>
                           </span>
                       </div>
                   </div>
                   <div class="salary_box" style="margin-bottom: 10px">
                       <h4>Skills</h4>
                       <div class="form-single-column" role="group" aria-labelledby="label_6" data-component="checkbox">
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_0" name="q6_areasOf[]" value="Performance Coach">
                               <label id="label_input_6_0" for="input_6_0"> Performance Coach </label>
                           </span>
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_1" name="q6_areasOf[]" value="Account Manager">
                               <label id="label_input_6_1" for="input_6_1"> Account Manager </label>
                           </span><br>
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_2" name="q6_areasOf[]" value="Administrative">
                               <label id="label_input_6_2" for="input_6_2"> Administrative </label><br>
                           </span>
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_3" name="q6_areasOf[]" value="Human Resources">
                               <label id="label_input_6_3" for="input_6_3"> Human Resources </label><br>
                           </span>
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_4" name="q6_areasOf[]" value="Sales">
                               <label id="label_input_6_4" for="input_6_4"> Sales </label>
                           </span>
                       </div>

                   </div>
                   <div class="salary_box" style="margin-bottom: 10px">

                       <h4>Company</h4>
                       <div class="form-single-column" role="group" aria-labelledby="label_6" data-component="checkbox">
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_0" name="q6_areasOf[]" value="Performance Coach">
                               <label id="label_input_6_0" for="input_6_0"> Apotex </label><br>
                           </span>
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_1" name="q6_areasOf[]" value="Account Manager">
                               <label id="label_input_6_1" for="input_6_1"> Google </label>
                           </span><br>
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_2" name="q6_areasOf[]" value="Administrative">
                               <label id="label_input_6_2" for="input_6_2"> Oracle </label><br>
                           </span>
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_3" name="q6_areasOf[]" value="Human Resources">
                               <label id="label_input_6_3" for="input_6_3"> Capgemini </label><br>
                           </span>
                           <span class="form-checkbox-item" style="clear:left">
                               <span class="dragger-item">
                               </span>
                               <input type="checkbox" class="form-checkbox" id="input_6_4" name="q6_areasOf[]" value="Sales">
                               <label id="label_input_6_4" for="input_6_4"> Infosys </label>
                           </span>
                       </div>
                   </div>

               </div>
               <div class="col-md-8">
                   <div class="bs-example">
                       <div id="myCarousel" class="carousel slide" data-ride="carousel">
                           <!-- Carousel indicators -->
                           <ol class="carousel-indicators">
                               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                               <li data-target="#myCarousel" data-slide-to="1"></li>
                               <li data-target="#myCarousel" data-slide-to="2"></li>
                           </ol> <!-- Wrapper for carousel items -->
                           <div class="carousel-inner">
                               <div class="carousel-item active"> <img src="images/apply.jpg" alt="First Slide"> </div>
                               <div class="carousel-item"> <img src="images/upload.jpg" alt="Second Slide"> </div>
                               <div class="carousel-item"> <img src="images/goal.jpg" alt="Third Slide"> </div>
                               <div class="carousel-item"> <img src="images/application.jpg" alt="Second Slide"> </div>
                           </div> <!-- Carousel controls --> <a class="carousel-control-prev" href="#myCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#myCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a>
                       </div>
                   </div>

                   <div class="row font-weight-bold" style="font-size: 20px ; margin-top: 100px">
                       <div class="col-md-2">

                       </div>
                       <div class="col-md-8">
                           <form method="post" action="index.php">
                               <label>Job Search</label>
                               <input type="text" name="jobsearch" style="width: 80%"><br>
                               <label style="margin-right: 20px">Location</label>
                               <input type="text" name="location" style="width: 80%"><br>
                               <button type="submit" name="btnsearch" class="submitbtn">Submit</button><br><br>
                               <h3 class="text-center mt-5">Let Employers Find You
                               </h3>
                               <h2 style="text-align:center ">Upload your resume</h2>

                               <form action="?" method="POST" enctype="multipart/form-data">
                                   <input type="file" name="title">
                                   <button type="submit" name="submit" value="Upload document">Submit </button>

                               </form><br><br>


                           </form>
                       </div>
                       <div class="col-md-2">
                           <?php
                        $host = "localhost";
                        $dbusername = "root";
                        $dbpassword = "";
                        $dbname = "form";
                        
                        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                        if (mysqli_connect_error()){
                            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
                        }
                        
                        if(isset($_POST['btnsearch'])) {
                            $job = '%' . $_POST['jobsearch'] . '%';
                            $loc = '%' . $_POST['location'] . '%';
                            
                    $sql = "select * from admin_table where name LIKE '$job' AND location LIKE '$loc'";
                           
                        $res = $conn->query($sql);
                            if ($res){
                                echo '<table>';
                                while($row = $res->fetch_assoc()) {
                                    echo '<tr>';
                                    
                                    echo '<td>' . $row['name'] . '</td>';
                                    echo '<td>' . $row['location'] . '</td>';
                                    echo '<td>' . $row['description'] . '</td>';
                                    echo '<td>' . $row['salary'] . '</td>';
                                    echo '<td>' . $row['company'] . '</td>';
                                    echo '<td>' . $row['job_type'] . '</td>';
                                    
                                    echo '</tr>';
                                }
                                echo '</table>';
                                
                            } else {
                                echo "Error: ". $sql ." ". $conn->error;
                            }
                        }
                        
                        $conn->close();
                        ?>
                       </div>
                   </div>



               </div>
               <div class="col-md-2">
                   <div class="salary_box" style="margin-bottom: 10px">
                       <h4>Notice Board</h4>
                       <video width="100" controls>
                           <source src="https://www.youtube.com/watch?v=hqYIe5Y76oY" type="video/mp4">
                         
                       </video>
                   </div>
                   <div class="salary_box" style="margin-bottom: 10px;  height: 200px">
                       <h4>Build Your Resume</h4>
                       <button><a href="Resume.php">Click here to Proceed</a></button>
                   </div>
                   <div class="salary_box" style="margin-bottom: 10px;  height: 200px">
                       <h4>Fill Up The Form</h4>
                       <form class="form" action="formconnect.php" method="post">
                           <div class="form-group">
                               <label class="sr-only" for="email">Username:</label>
                               <input type="email" class="form-control" id="email" placeholder="Enter username" name="username">
                           </div><br>
                           <div class="form-group">
                               <label class="sr-only" for="pwd">Password:</label>
                               <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                               <label class="checkbox"><input type="checkbox" name="remember"> Remember me</label>
                               <button type="submit">Submit</button>
                           </div>
                       </form>
                       <div class="clr"></div>
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
