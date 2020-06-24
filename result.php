<?php

    include('connection.php');
    session_start();
    if(!$_SESSION['loggedInUser']){
        header("Location:index.php");
    }

    $query = "SELECT * FROM users WHERE id=" . $_SESSION['loggedInUser'];
    $result = mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($result)){
        $img_url = "src/images/" . $row['image'];
        $institute_name = $row['institute'];
    }


    if(isset($_POST["form_submit"])){
        $dept = $_POST["Dept"];
        $sem = $_POST["Sem"];
        $table_name = strtolower(str_replace(' ', '', $dept)).$sem;
        $data = "select * from ".$table_name." where college_id=".$_SESSION["loggedInUser"];
        $data_res = mysqli_query($conn,$data);

    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <link rel="stylesheet" href="src/css/bootstrap_original.css">
    <style>
      html{
        overflow-x:hidden;

      }
        body{
            background-color: #F1F2F7;
            margin:0;
        }
        .bg-white{
            background-color: white;
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
  color: white;
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
        td,th{
          text-align: center;
        }
        .fail{
          background-color: #FE9996;
          color: white;
        }
        .pass{
          background-color: #34CA96;
          color: white;
        }
    </style>
</head>
<body>

   <!-- Navbar   -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark py-3">

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

    <!-- Center content -->
    <div class="row">

               <!-- Side bar    -->
      <div class="col-md-3 fixed-sidebar" style="background:#FFFFFF;  min-height:610px;">
        <div class="row pt-3">
            <div class="col text-center">
                <img src="<?php echo $img_url?>" alt="logo" class="" height="100px">
            </div>
        </div>
          <p class="pt-2 lead text-dark text-center"> <b><?php echo $institute_name?></b> </p>
          <hr class="bg-dark w-50">


            <!-- Result Overview -->
           <div class="row m-2">
             <div class="col p-4 bg-gradient-info text-light">
                 <p>Students Record</p>
                 <h3><?php
                     if($data_res){
                        echo mysqli_num_rows($data_res);
                     }else{
                        echo "No Record Found";
                     }

                     ?>

                    </h3>
             </div>
         </div>
         <div class="row m-2">
             <div class="col p-4 bg-gradient-success text-light">
                 <p>Students Pass</p>
                 <h3><?php

                    if($data_res){
                        $pass_query = "SELECT COUNT(Result) from ".$table_name." WHERE Result = 'Pass' AND College_id =".$_SESSION["loggedInUser"];
                    $result_pass = mysqli_query($conn,$pass_query);

                    while($rows = mysqli_fetch_assoc($result_pass)){
                        echo $rows["COUNT(Result)"];
                    }
                    }else{
                      echo "No Record Found";
                    }


                  ?></h3>
             </div>
         </div>
         <div class="row m-2">
             <div class="col p-4 bg-grad-danger text-light">
                 <p>Students Failed</p>
                  <h3><?php

                    if($data_res){
                        $pass_query = "SELECT COUNT(Result) from ".$table_name." WHERE Result = 'Fail' AND College_id =".$_SESSION["loggedInUser"];
                        $result_pass = mysqli_query($conn,$pass_query);

                      while($rows = mysqli_fetch_assoc($result_pass)){
                          echo $rows["COUNT(Result)"];
                      }
                    }else{
                        echo "No Record Found";
                    }


                  ?></h3>
             </div>
         </div>


      </div>

       <!-- result section      -->
        <div class="ml-5 col-md-8 result-section">

           <div class=" my-4 bg-gradient-success p-3">
               <form action="result.php" method="post">
                   <h3 class="border border-top-0 border-right-0 border-left-0 border-light pb-2 mb-3 w-25">Options</h3>
                   <div class="form-row">
                       <div class="col">
                           <div class="form-group">
                               <label>Subject</label>
                               <select name="subject" id="" class="form-control">
                                  <?php

                                    $sql = "SHOW COLUMNS FROM ".$table_name;
                                    $result = mysqli_query($conn,$sql);
                                    if($result){
                                      $col_names = array();
                                      while($row = mysqli_fetch_array($result)){
                                        array_push($col_names,$row['Field']);
                                      }

                                      for($i = 4;$i<count($col_names)-1;$i++){
                                        echo "<option value='$col_names[i]'>$col_names[$i]</option>";

                                      }
                                      }else{
                                          echo "<div class='col p-4 mr-2 bg-gradient-info text-light'>
                                            <h3>No Data Available</h3>
                                            </div>";
                                      }

                                  ?>
                               </select>
                           </div>
                       </div>
                       <div class="col">
                           <div class="form-group">
                               <label>Grade</label>
                               <select name="grade" id="" class="form-control">
                                    <option value="AA">AA</option>
                                    <option value="AB">AB</option>
                                    <option value="BB">BB</option>
                                    <option value="BC">BC</option>
                                    <option value="CC">CC</option>
                                    <option value="CD">CD</option>
                                    <option value="DD">DD</option>
                                    <option value="FF">FF</option>
                               </select>
                           </div>
                       </div>
                   </div>
                   <button class="btn btn-light" name="inpage-search">Search</button>
               </form>
           </div>
            <?php

                if(isset($_POST["inpage-search"])){

                    $sub = $_POST["subject"];
                    $grade = $_POST["grade"];

                    echo $sub;
                    echo $grade;
                }

             ?>
            <div class="">
                <table class="table my-4 bg-white">
          <thead class="thead-dark">
            <tr>
              <?php

                $sql = "SHOW COLUMNS FROM ".$table_name;
                $result = mysqli_query($conn,$sql);
                if($result){
                   $col_names = array();
                    while($row = mysqli_fetch_array($result)){
                      array_push($col_names,$row['Field']);
                  }

                  for($i = 1;$i<count($col_names);$i++){
                    echo "<th>$col_names[$i]</th>";
                  }
                }else{
                  echo "<div class='col p-4 mr-2 bg-gradient-info text-light'>

                       <h3>No Data Available</h3>
                        </div>";
                }

              ?>


            </tr>
          </thead>

          <tbody>
          <?php

                // print_r($col_names);


                if($data_res){
                  while($rows = mysqli_fetch_assoc($data_res)){
                      $erNo = $rows[$col_names[1]];
                      $student_name = $rows[$col_names[2]];
                      $subOne = $rows[$col_names[3]];
                      $subTwo = $rows[$col_names[4]];
                      $subThree = $rows[$col_names[5]];
                      $subFour = $rows[$col_names[6]];
                      $subFive = $rows[$col_names[7]];
                      $result = $rows[$col_names[8]];
                       ?>

                      <tr>
                        <td><?php echo $erNo; ?></td>
                        <td><?php echo $student_name; ?></td>
                        <td><?php echo $subOne; ?></td>
                        <td><?php echo $subTwo; ?></td>
                        <td><?php echo $subThree; ?></td>
                        <td><?php echo $subFour; ?></td>
                        <td><?php echo $subFive; ?></td>
                        <td id="<?php echo $erNo; ?>" class=""><?php echo $result; ?></td>
                        <?php

                          echo "<script>

                            val = document.getElementById($erNo).innerHTML;
                            compare_result = val.localeCompare('Fail');
                            if(!compare_result){
                                document.getElementById($erNo).classList.add('fail');
                            }else{
                              document.getElementById($erNo).classList.add('pass');
                            }
                          </script>";

                         ?>
                      </tr>
                  <?php }
                }else{

                }

            ?>

      </tbody>
    </table>
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


