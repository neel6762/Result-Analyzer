<?php 

    // use include() to inclues different html files
    // include('header.php')

    session_start();
    if(isset($_COOKIE[session_name()])){
        // empty the cookie
        setcookie(session_name(),'',time()-86400,'/');
    }
    
    // clear all the session variables
    session_unset();
    
    // destroy the session
    session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logged Out</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <style>
        body{
            background-color: #F1F2F7;
        }
        .bg-gradient-success{
            background: linear-gradient(to right, #74cf98, #0cc896);
            color: white;
            padding: 3px;
        }
    </style>
</head>    
<body>
   
    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark py-3">
        
        <div class="container">
            <h3 class="text-light">GTU Result Analyzer</h3>
            <button class="navbar-toggler" data-toggle="collapse" data-target="navItem">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navItem">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h2>You are Logged out !</h2>
                <a href="index.php" class="btn btn-primary p-2">Click here to login again!</a>
            </div>
        </div>
    </div>
    
    <div class="border border-dark"></div>
    
    <!-- Footer   -->
    <div class="container my-3">
        <div class="row">
            <div class="col text-center">
                <p>See you soon !</p>
            </div>
        </div>
    </div>
    <!-- footer    -->
    <section class="bg-dark text-light p-3">
       
       <div class="row">
           <div class="col text-center">
               &#9400; GTU Result Analyzer
           </div> 
       </div>
        
    </section>
</body>
</html>