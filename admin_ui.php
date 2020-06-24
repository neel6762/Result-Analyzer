<?php
    session_start();
    include 'connection.php';
    // if the user is not logged in
    if(!$_SESSION['user']){

        // send the user back to the login page
        header("Location: admin_login.php");
    }
?>



<!DOCTYPE html>
<html>
   <head>
        <title>GTU Admin</title>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="custom.css">
        <style>
          body{
            margin:0;
          }
        </style>
    </head>

    <body>
        <!-- Navbar Section -->
        <section>
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-3">
                <div class="container">
                  <a href="#" class="navbar-brand">GTU Result Analyzer</a>
                   <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
                   <div class="collapse navbar-collapse" id="navbarNav">

                       <ul class="navbar-nav ml-auto">
                           <li class="nav-item dropdown mr-3">
                               <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                   <i class="fas fa-user"></i> Welcome User
                               </a>
                               <div class="dropdown-menu">
                                   <a href="#" class="dropdown-item"><i class="fas fa-user-circle"></i>
                                   Profile</a>
                                   <a href="#" class="dropdown-item"><i class="fas fa-cog"></i>
                                   Settings</a>
                               </div>
                           </li>
                           <li class="nav-item">
                               <a href="logout.php" class="nav-link">
                               <i class="fas fa-user-times"></i> Logout</a>
                           </li>
                       </ul>
                   </div>
                </div>
            </nav>
        </section>

        <header id="main-header" class="py-3 bg-primary text-white">
            <div class="container">
                <div class="row">
                    <col-md-6>
                        <h1><i class="fas fa-cog"></i> Admin Dashboard</h1>
                    </col-md-6>
                </div>
            </div>
        </header>

        <!-- Actions -->
        <section id="section" class="py-4 mb-4 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 d-none">
                      <button class="btn btn-primary btn-block " data-toggle="modal" data-target="#uploadResult">Upload Result</button>
                    </div>

                    <div class="col-md-3">
                        <button class="btn btn-warning btn-block text-light" data-toggle="modal" data-target="#addUser">Add User</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Posts -->
        <section id="post">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h4>Latest Posts</h4>
                            </div>
                            <table class="table table-striped">
                                 <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Semester</th>
                                        <th>Department</th>
                                        <th>Date Posted</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>1</td>
                                        <td>Information Technology</td>
                                        <td>June 12, 2018</td>
                                        <td><a href="file:///F:/web-projects/bootstrap/Dash-board/detail.html" class="btn btn-secondary"><i class="fas fa-angle-double-right"></i>Details</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td>3</td>
                                        <td>Computer Engineering</td>
                                        <td>June 20, 2018</td>
                                        <td><a href="file:///F:/web-projects/bootstrap/Dash-board/detail.html" class="btn btn-secondary"><i class="fas fa-angle-double-right"></i>Details</a></td>
                                    </tr>
                                      <tr>
                                          <td scope="row">3</td>
                                          <td>5</td>
                                          <td>Mechanical Engineering</td>
                                          <td>June 22, 2018</td>
                                          <td><a href="file:///F:/web-projects/bootstrap/Dash-board/detail.html" class="btn btn-secondary"><i class="fas fa-angle-double-right"></i>Details</a></td>
                                      </tr>
                                      <tr>
                                          <td scope="row">4</td>
                                          <td>7</td>
                                          <td>Electrical Enginnering</td>
                                          <td>June 12, 2018</td>
                                          <td><a href="file:///F:/web-projects/bootstrap/Dash-board/detail.html" class="btn btn-secondary"><i class="fas fa-angle-double-right"></i>Details</a></td>
                                      </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id="main-footer" class="bg-dark text-white p-2 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="lead text-center">
                            Copyright © 2018 GTU Result Analyser
                        </p>
                    </div>
                </div>
            </div>
        </footer>


  <!-- Modal Content -->

        <!-- Upload Result  Modal -->
        <div class="modal fade text-dark" id="uploadResult">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalTitle">Contact Us</h5>
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                           <div class="form-group">
                                  <label for="name">Name</label>
                                <input type="text" class="form-control">
                           </div>
                           <div class="form-group">
                                  <label for="eamil">Email</label>
                                <input type="email" class="form-control">
                           </div>

                           <div class="form-group">
                                <label for="name">Message</label>
                                <textarea name="message" id="" cols="30" rows="5" class="form-control"></textarea>
                           </div>


                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add User  Modal -->
        <div class="modal fade text-dark" id="addUser">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalTitle">Add Institute Data</h5>
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="admin_ui.php" method="post" enctype="multipart/form-data">
                           <div class="form-group">
                                  <label for="name">Institute Id</label>
                                <input type="text" class="form-control" name="institute_id" required="">
                           </div>
                           <div class="form-group">
                                  <label for="eamil">Set Password</label>
                                <input type="text" class="form-control" name="password" required="">
                           </div>

                            <div class="form-group">
                                <label for="image">Upload Your Institute Logo (PNG)</label>
                                <input type="file" name="up-file" required>
                           </div>

                           <div class="form-group">
                                <label for="image">Institute Name</label>
                                <input type="text" class="form-control" name="ins-name" required="">
                           </div>

                           <div class="form-group">
                              <label for="">Institute Departments</label>
                            </div>

                          <div class="row">

                            <div class="col">
                                <div class="checkbox">
                                  <label><input type="checkbox" value="Information Technology" name="dept[]">Information Technology</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="checkbox">
                                  <label><input type="checkbox" value="Copmuter Engineering" name="dept[]">Computer Engineering</label>
                                </div>
                            </div>
                          </div>
                          <div class="row">

                            <div class="col">
                                <div class="checkbox">
                                  <label><input type="checkbox" value="Civil Engineering" name="dept[]">Civil Engineering</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="checkbox">
                                  <label><input type="checkbox" value="Electrical Engineering" name="dept[]">Electrical Engineering</label>
                                </div>
                            </div>
                          </div>
                          <div class="row">

                            <div class="col">
                                <div class="checkbox">
                                  <label><input type="checkbox" value="Chemical Engineering" name="dept[]">Chemical Engineering</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="checkbox">
                                  <label><input type="checkbox" value="Mechanical Engineering" name="dept[]">Mechanical Engineering</label>
                                </div>
                            </div>
                          </div>


                           <div class="form-group">
                                <label for="es-year">Established Year</label>
                                <input type="text" name="est-year" class="form-control" required="">
                           </div>


                           <div class="form-group">
                                <label for="principal">Principal</label>
                                <input type="text" name="principal" class="form-control" required="">
                           </div>


                           <div class="form-group">
                                <label for="total-students">Total Students</label>
                                <input type="text" name="tot-students" class="form-control" required="">
                           </div>


                           <div class="form-group">
                                <input type="submit" name="add-user-btn" value="Create User" class="btn btn-primary btn-block">
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
          <?php

              if(isset($_POST["add-user-btn"])){
                  $ins_id = $_POST["institute_id"];
                  $password = $_POST["password"];
                  $ins_name = $_POST["ins-name"];
                  $tot_students = $_POST["tot-students"];
                  $principal = $_POST["principal"];
                  $et_year = $_POST["est-year"];
                  $dept = $_POST["dept"];
                  $file_type = $_FILES["up-file"]["type"];
                  // get deptartment values
                  $i = 0;
                  foreach($dept as $val){
                    $i++;
                  }

                  // logo upload
                  $target_dir = "src/images/logo/";
                  $target_file = $target_dir . $ins_id . ".png";

                  // var_dump($file_type);
                  if($file_type  == "image/png"){
                      if(move_uploaded_file($_FILES['up-file']['tmp_name'], $target_file)){
                          $image = $ins_id . ".png";
                          $add_user = "insert into users(id,password,institute,image,total_dept,et_year,principal,total_students) values('$ins_id','$password','$ins_name','$image','$i','$et_year','$principal','$tot_students')";
                          // var_dump($add_user);
                          $add_user_result = mysqli_query($conn,$add_user);
                          if($add_user_result){
                              $j = 0;
                              foreach($dept as $val){
                                $j++;
                                $update_user = "update users set dep".$j."='$val' where id='$ins_id'";
                                // var_dump($update_user);
                                $update_user_result = mysqli_query($conn,$update_user);
                              }
                              echo "<script>alert('Institute Added Successfully');</script>";
                          }
                      }else{
                          echo "<script>alert('Your File was not Uploaded, Try again');</script>";
                      }
                  }else{
                    echo "<script>alert('Upload a .png file');</script>";
                  }


              }

           ?>
        <!-- Add User Modal -->
</body>
</html>
