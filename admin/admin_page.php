<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
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
            <div class="col-sm-3 ml-2"> <img src="images/logo.jpg" alt="logo" width="200px" height="100px"></div>
            <div class="col-sm-6">
                <nav class="navbar navstyle navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FAQ's</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-sm-2 m-5 font-weight-bold" style="font-size: 20px">
                <a href="Connect.html">Log in</a> |
                <a href="">Sign up</a>
            </div>
        </div>

        <div class="row" style="padding:20px">
            <div class="col-md-2">
                <div class="salary_box" style="margin-bottom: 10px">
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Salary</button>
                        <div id="myDropdown" class="dropdown-content">
                            <input type="checkbox" value="checked">0 to 400<br>
                            <input type="checkbox" value="">400 to 1000<br>
                            <input type="checkbox" value="">1000 to 1500<br>
                            <input type="checkbox" value="">1500 to 2500<br>
                            <input type="checkbox" value="">2500 to 8400<br>
                            <input type="checkbox" value="">9500 to 400<br>
                            <input type="checkbox" value="">500 to 400<br>
                            <input type="checkbox" value="">500 to 400<br>
                            <input type="checkbox" value="">500 to 400<br>
                            <input type="checkbox" value="">500 to 400<br>
                        </div>
                    </div>
                </div>
                <div class="salary_box" style="margin-bottom: 10px">
                    <h4>Skills</h4>
                    <input type="checkbox" value="checked">Communication<br>
                    <input type="checkbox" value="">Communication<br>
                    <input type="checkbox" value="">Communication<br>
                    <input type="checkbox" value="">Communication<br>
                    <input type="checkbox" value="">Communication<br>
                    <input type="checkbox" value="">Communication<br>
                    <input type="checkbox" value="">Communication<br>
                    <input type="checkbox" value="">Communication<br>
                    <input type="checkbox" value="">Communication<br>
                    <input type="checkbox" value="">Communication<br>
                </div>
                <div class="salary_box" style="margin-bottom: 10px">
                    <h4>Company</h4>
                    <input type="checkbox" value="">500 to 400<br>
                    <input type="checkbox" value="">500 to 400<br>
                    <input type="checkbox" value="">500 to 400<br>
                    <input type="checkbox" value="">500 to 400<br>
                    <input type="checkbox" value="">500 to 400<br>
                    <input type="checkbox" value="">500 to 400<br>
                    <input type="checkbox" value="">500 to 400<br>
                    <input type="checkbox" value="">500 to 400<br>
                    <input type="checkbox" value="">500 to 400<br>
                    <input type="checkbox" value="">500 to 400<br>

                </div>
                <!--
       <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Salary</button>
  <div id="myDropdown" class="dropdown-content">
   <input type="checkbox" value="checked">500 to 400<br>
            <input type="checkbox" value="">500 to 400<br>
            <input type="checkbox" value="">500 to 400<br>
            <input type="checkbox" value="">500 to 400<br>
            <input type="checkbox" value="">500 to 400<br>
            <input type="checkbox" value="">500 to 400<br>
            <input type="checkbox" value="">500 to 400<br>
            <input type="checkbox" value="">500 to 400<br>
            <input type="checkbox" value="">500 to 400<br>
            <input type="checkbox" value="">500 to 400<br>
  </div>
</div>
-->


            </div>
            <div class="col-md-8">


                <div class="row font-weight-bold" style="font-size: 20px ;">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <h1>Admin Portal</h1>
                        <form class="form-horizontal" method="post" action="">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="jobtitle">JobTitle:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="jobtitle" placeholder="Enter name" name="jobtitle">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="jobdescription">jobdescription:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="jobdescription" placeholder="Enter description" name="jobdescription">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="location">location:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="location" placeholder="location" name="location">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="salary">salary:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="salary" placeholder="salary" name="salary">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="company">company:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="company" placeholder="company" name="company">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="job-type">job type:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="job-type" placeholder="job-type" name="job-type">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button name="btnsubmit" type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
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
                        
                        if(isset($_POST['btnsubmit'])) {
                            $name = $_POST['jobtitle'];
                            $desc = $_POST['jobdescription'];
                            $loc = $_POST['location'];
                            $salary = $_POST['salary'];
                            $company = $_POST['company'];
                            $type = $_POST['job-type'];
                            $sql = "INSERT INTO admin_table VALUES (DEFAULT, '$name','$loc', '$desc', $salary, '$company', '$type')";
                            if ($conn->query($sql)){
                                echo "New record is inserted sucessfully";
                            }
                            else {
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
                    <ul style="list-style: none ; text-align: left; margin: 20px">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                        <li>Item 5</li>
                        <li>Item 6</li>
                    </ul>
                </div>
                <div class="salary_box" style="margin-bottom: 10px;  height: 200px">
                    <h4>Build Your Resume</h4>
                </div>
                <div class="salary_box" style="margin-bottom: 10px;  height: 200px">
                    <h4>Fill Up The Form</h4>
                    <form class="form" action="/action_page.php">
                        <div class="form-group">
                            <label class="sr-only" for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div><br>
                        <div class="form-group">
                            <label class="sr-only" for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
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
