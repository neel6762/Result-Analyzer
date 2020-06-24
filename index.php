<?php

    // Connect to the Database
include('connection.php');
global $loginError;
session_start();
if(isset($_POST["form_submit"])){

    $formid = $_POST["inscode"];
    $formpass = $_POST["password"];

        // Query for the username and password
    $query ="Select id,password from users WHERE id='$formid'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0 ){
        //Store the data in a variable

        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $pass = $row['password'];
        }

            // Verify the password
        if($formpass == $pass){


                // Store the data in SESSION variable
            $_SESSION['loggedInUser'] = $id;
            header("Location:dashboard.php");
        }else{
                // error message
            $loginError = "<div class='alert alert-danger mt-2' role='alert'>
            Wrong Password!
            </div>";
        }
        }else{ // no results
            $loginError = "<div class='alert alert-danger mt-2' role='alert'>
            No User Found !
            </div>";
        }

        mysqli_close($conn);
    }


    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1">
        <title>GTU Result Analyzer</title>
        <link rel="stylesheet" href="src/css/bootstrap_original.css">
        <link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Font Awesome   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">
        <style>
        body{
            font-family: 'Domine',serif;
            background-image: url(src/images/main.jpg);
            /*      background:linear-gradient(to bottom right, #2000ff, #ed30f0);*/
            background-size: cover;
            background-attachment: fixed;
            margin:0 auto;

        }
        .dark-overlay{
            background-color: rgba(0,0,0,0.7);
            position: absolute;
            top: 0;left: 0;
            min-height: 753px;
            width: 100%;
        }
        .login-section{
            margin-top: 150px;
            background: white;
            margin-left: 35%;
            width: 30%;
        }
        .fp{
            font-size: 13px;
        }

    </style>
</head>
<body>

    <!-- content   -->
    <div class="dark-overlay">
        <div class="col center p-3 lead login-section">
           <div class="row">
               <div class="col text-center">
                   <img src="src/images/gtu.png" alt="gtu-logo" height="200px">

               </div>
           </div>
           <?php echo $loginError; ?>

           <form action="index.php" method="post" class="p-2 mt-3">

            <div class="md-form">
                <input type="text" id="inputMDEx" class="form-control" name="inscode" required="">
                <label for="inputMDEx">Institute Id</label>
            </div>

            <div class="md-form">
                <input type="password" id="inputMDEx" class="form-control" name="password" required="">
                <label for="inputMDEx">Password</label>
            </div>



            <div class="row mb-3">
                <div class="col">

                   <button class="btn btn-indigo btn-block" type="submit" name="form_submit">
                       <i class="fab fa-telegram-plane mr-3"></i>Login
                   </button>


               </div>
               <div class="col">
                <button class="btn btn-danger btn-block" type="Reset">Reset</button>
            </div>
        </div>
        <div class="row d-none">
            <div class="col">
                <a href="admin_login.php" class="fp">Admin Login -></a>
            </div>
        </div>
    </form>
</div>
</div>
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
