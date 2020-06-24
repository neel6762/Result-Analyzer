<?php
   session_start();

    // if the user is not logged in
    if(!$_SESSION['loggedInUser']){

        // send the user back to the login page
        header("Location: index.php");
    }

    // connect to the database
    include('connection.php');
    global $id;
    // query and result
    $query = "SELECT * FROM users WHERE id=" . $_SESSION['loggedInUser'];
    $result = mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($result)){
        $img_url = "src/images/logo/" . $row['image'];
        $institute_name = $row['institute'];
        $dept_count = $row['total_dept'];
        $dept1 = $row['dep1'];$dept2 = $row['dep2'];$dept3 = $row['dep3'];
        $dept4 = $row['dep4'];$dept5 = $row['dep5'];$dept6 = $row['dep6'];
    }
    // close the connection
//    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="src/css/bootstrap_original.css">
    <link rel="stylesheet" href="src/css/color.css">

    <!-- Font Awesome Link  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <style>
      html{
        overflow:hidden;

      }
        body{
            background-color: #F1F2F7;
            margin:0;
        }
        .boxes{
            padding: 50px;
        }
        a:hover{
            color: white;
        }
        .bg-light-gray:hover{
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }
        .bor{
            border-right: 1.5px solid black;
        }
        .bg-grad-danger{
             background: linear-gradient(to top, #fd7d96, #fea196);
        }
        .bg-gradient-primary{
  background: linear-gradient(to right, #a09df8, #328ee6);
}

.bg-gradient-secondary{
  background: linear-gradient(to right, #e7ebf0, #868e96);
}

.bg-gradient-success{
  background: linear-gradient(to right, #74cf98, #0cc896);
}

.bg-gradient-info {
  background: linear-gradient(to right, #da9bf5, #b459ff);
}

.bg-gradient-warning{
  background: linear-gradient(to right, #fad961, #f99b44);
}

.bg-gradient-light {
  background: linear-gradient(to right, #cfd9df 0%, #e2ebf0 100%);
}

.bg-gradient-dark {
  background: linear-gradient(to right, #7d7979 0%, #000000 100%);
}

        .bg-white{
            color: white;
            color: black;
        }
    </style>
</head>
<body>

    <!-- Navbar   -->
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark py-3">

        <div class="container">
            <h3 class="text-light">GTU Result Analyzer</h3>
            <button class="navbar-toggler" data-toggle="collapse" data-target="navItem">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navItem">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3 nav-link text-light">Welcome Admin</li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Institute Details   -->
    <div class="row">

        <!-- Side bar    -->
      <div class="col-md-3" style="background:#FFFFFF; height:610px;">
        <div class="row pt-3">
            <div class="col text-center">
                <img src="<?php echo $img_url?>" alt="logo" class="img-fluid" height="100px" width="auto">
            </div>
        </div>
          <p class="pt-2 lead text-dark text-center"> <b><?php echo $institute_name?></b> </p>
          <hr class="bg-dark w-50">
      </div>

<!--     center content -->
<?php

  $meta_data_query = "select et_year,principal,total_students from users where id=".$_SESSION["loggedInUser"];
  $meta_data_result = mysqli_query($conn,$meta_data_query);

  if(mysqli_num_rows($meta_data_result) > 0){
      while($rows = mysqli_fetch_assoc($meta_data_result)){
        $principal_name = $rows["principal"];
        $et_year = $rows["et_year"];
        $tot_students = $rows["total_students"];
      }
  }

 ?>
    <div class="ml-5 col-md-8">

         <div class="row my-4">
             <div class="col p-4 mr-2 bg-grad-danger text-light">
                 <p>Total Students</p>
                 <h3><?php echo $tot_students; ?></h3>
             </div>
             <div class="col p-4 mr-2 bg-gradient-primary text-light">
                 <p>Principal</p>
                 <h4><?php echo $principal_name; ?></h4>
             </div>
             <div class="col p-4 mr-2 bg-gradient-success text-light">
                 <p>Established Year<p>
                 <h3><?php echo $et_year; ?></h3>
             </div>
             <div class="col p-4 text-light bg-gradient-info ">
                 <p>Top Score(SPI)</p>
                 <h3>9.5</h3>
             </div>
         </div>

        <div class="row my-4">
            <!--  Select Option          -->
            <div class="col border bg-white">

                 <form action="" class="my-3" method="post">
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                   <label for="">Department</label>
                    <select name="Dept" id="" class="form-control">
                        <?php
                            $val = array($dept1,$dept2,$dept3,$dept4,$dept5,$dept6);
                            for($i = 0;$i<$dept_count;$i++){
                        ?>
                            <option value="<?php echo $val[$i] ?>"><?php echo $val[$i]?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                   <label for="">Semester</label>
                    <select name="Sem" id="" class="form-control">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                    </select>
                </div>
                    </div>

                </div>
                <button class="btn btn-primary" type="submit" name="form_submit">
                            Search
                               </button>
            </form>
            <?php
              if(isset($_POST["form_submit"]))
              {
                  $_SESSION["student"]["dept"]=$_POST["Dept"];
                  $_SESSION["student"]["sem"]=$_POST["Sem"];
                  echo "<script>window.location.href='test_result.php';</script>";
              }
            ?>
            </div>

            <div class="col">

            </div>
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


