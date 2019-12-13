<!DOCTYPE html>
<html lang="en">

<head>
    <title>JobHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
        /* Add padding to containers */
        .container {
            padding: 16px;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }


        /* Set a style for the submit button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 ml-2"> <img src="images/logo.png" alt="logo" width="200px" height="100px"></div>
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
                <a href="">Sign up</a>
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
                <h1 class="text-center">Contact Us</h1>
                <div class="container">

                    <div class="col-md-4">
                        <img src="images/downarrow.jpg">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d185436.70180858276!2d-80.61639872785621!3d43.43034885506479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882bf48c03ee5105%3A0x9525f8e6df5f544b!2sKitchener%2C%20ON!5e0!3m2!1sen!2sca!4v1570802729844!5m2!1sen!2sca" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="col-md-4">
                        <form action="register.php" method="post">
                            <div class="container" style="margin-left: 50%;">
                                <h1>Register</h1>
                                <p>Please fill in this form to create an account.</p>
                                <hr>

                                <label for="email"><b>Email</b></label>
                                <input type="text" placeholder="Enter Email" name="email" required>

                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required>

                                <label for="psw"><b>Gender</b></label>
                                <input type="radio" name="gender" value="m" required>Male
                                <input type="radio" name="gender" value="f" required>Female <br>

                                <label for="psw"><b>Phone no.</b></label>
                                <select name="phoneCode" required>
                                    <option selected hidden value="">Select Code</option>
                                    <option value="977">977</option>
                                    <option value="978">978</option>
                                    <option value="979">979</option>
                                    <option value="973">973</option>
                                    <option value="972">972</option>
                                    <option value="974">974</option>
                                </select>
                                <input type="phone" name="phone" required>


                                <hr>
                                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                                <button type="submit" class="registerbtn">Register</button>
                            </div>


                        </form>
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
</body>

</html>
