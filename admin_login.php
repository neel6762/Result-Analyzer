<?php

    // Connect to the database
    include('connection.php');
    global $loginError;
    session_start();
    if(isset($_POST['form_submit'])){

        $form_id = $_POST['id'];
        $form_pass = $_POST['password'];

        // query for the username and password
        $query = "Select id,password from users WHERE id='$form_id'";
        $result = mysqli_query($conn, $query);

        // check for any such record
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $pass = $row['password'];
            }
            if($form_pass == $pass){

                // create a session
                $_SESSION['user'] = $id;
                header("Location:admin_ui.php");
            }else{
                $loginError = "
                <div class='alert alert-danger'>
                    <p>Wrong password!</p>
                </div>";
            }
        }else{
            $loginError = "<div class='alert alert-danger'>
            <p>Username not Found / You may have left fields empty</p></div>";
        }
    }
    mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="src/css/bootstrap_original.css">
    <style>
        body{
            background-color: #F1F2F7;
        }
        a.hover{
            text-decoration: none;
        }
        .bg-white{
            background: white;
        }
    </style>
</head>
<body>
    <!-- navbar section    -->

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark py-3">

        <div class="container">
            <a href="index.php"><h3 class="text-light">GTU Result Analyzer</h3></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="navItem">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navItem">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   <div class="container mt-5">
        <form class="bg-white p-4" action="admin_login.php" method="post">
         <div class="row">
             <div class="col"><h2>Admin Login</h2></div>
         </div>
         <div class="form-row">
              <div class="col input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" name="id" placeholder="Admin">
             </div>
            <div class="col">
                    <input type="password" class="form-control mb-2 mr-sm-2" name="password" placeholder="Password">
            </div>
          <div class="col">
              <button type="submit" class="btn btn-primary mb-2" name="form_submit">Submit</button>
          </div>
         </div>
        </form>
        <?php echo $loginError;?>
   </div>

    <div class="border mt-5"></div>
</body>
</html>
