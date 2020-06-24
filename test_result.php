<?php

    include('connection.php');
    session_start();
    // var_dump($_SESSION);
    if(!$_SESSION['loggedInUser']){
        header("Location:index.php");
    }
    global $data_res,$table_name;
    $query = "SELECT * FROM users WHERE id=" . $_SESSION['loggedInUser'];
    $result = mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($result)){
        $img_url = "src/images/logo/" . $row['image'];
        $institute_name = $row['institute'];
    }


    if(isset($_SESSION["student"])){
        $dept = $_SESSION["student"]["dept"];
        $sem = $_SESSION["student"]["sem"];
        $table_name = strtolower(str_replace(' ', '', $dept)).$sem;
        $data = "select * from ".$table_name." where college_id=".$_SESSION["loggedInUser"];
        $data_res = mysqli_query($conn,$data);
        // $data_res = $_SESSION[$data_res];
        // $table_name = $_SESSION[$table_name];

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
        .hide{
          display: none;
        }
        .confirm_selection {
    animation: glow .5s infinite alternate;
}

@keyframes glow {
    to {
        text-shadow: 2px 2px 20px #B65CFE;
    }
}

.confirm_selection {
    font-family: sans-serif;
    font-size: 36px;
    font-weight: bold;
}
    </style>

    <!-- Download Excel File -->


<script type="text/javascript">
function exportToExcel(tableID, filename = ''){
    var downloadurl;
    var dataFileType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');

    // Specify file name
    filename = filename?filename+'.xls':'export_excel_data.xls';

    // Create download link element
    downloadurl = document.createElement("a");

    document.body.appendChild(downloadurl);

    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTMLData], {
            type: dataFileType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadurl.href = 'data:' + dataFileType + ', ' + tableHTMLData;

        // Setting the file name
        downloadurl.download = filename;

        //triggering the function
        downloadurl.click();
    }
}

</script>


</head>
<body>

   <!-- Navbar   -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark py-3">

        <div class="container">
            <form action="test_result.php" method="post">
                <button style="background-color: transparent;border:1px solid #343A40;cursor:pointer;" name="all-result">
                  <h3 class="text-light confirm_selection">
                     GTU Result Analyzer
                  </h3>
                </button>
            </form>
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
                <img src="<?php echo $img_url?>" alt="logo" class="img-fluid" height="100px" width="auto">
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
                         $tot_students = mysqli_num_rows($data_res);
                         echo $tot_students;
                        $_SESSION["total_students"] = $tot_students;
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
               <div class="row m-2">
             <div class="col p-4 bg-gradient-info text-light">
                 <p>Highset Score</p>
                 <h3><?php
                     if($data_res){

                     }else{
                        echo "No Record Found";
                     }

                     ?>

                    </h3>
             </div>
         </div>

      </div>

       <!-- result section      -->
        <div class="ml-2 col-md-8 result-section">

           <div class=" my-4 bg-gradient-success p-3">
               <form action="test_result.php" method="post">
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
                                        echo "<option value='$col_names[$i]'>$col_names[$i]</option>";

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


                    if(isset($_SESSION["student"]) && !empty($_SESSION["student"]))
                    {
                      $_SESSION["student"]["sub"] = $_POST["subject"];
                      $_SESSION["student"]["grade"] = $_POST["grade"];
                    }





                    echo "

                        <script>
                            document.getElementById('regular-page').classList.addClass('hide');
                        </script>
                    ";


                }

             ?>


            <?php

              if((isset($_SESSION["student"]) && !empty($_SESSION["student"]) && !isset($_POST["inpage-search"])) || isset($_POST["all-result"]))
              {
              ?>




            <div id="regular-page">
                <table class="table my-4 bg-white" id="student-result-table">
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

    <button onclick="exportToExcel('student-result-table', '<?php echo $table_name; ?>')" class="my-3 btn btn-primary">
        Download Result
    </button>
  </div>



              <?php
                  }
                  else if(isset($_SESSION["student"]) && !empty($_SESSION["student"]) && isset($_POST["inpage-search"]))
                  {
                    $sub = $_SESSION['student']['sub'];
                    $grde = $_SESSION['student']['grade'];
                    $college_id = $_SESSION["loggedInUser"];
                      $data = "select enroll_no,student_name,$sub,Result from $table_name where college_id='$college_id' and $sub='$grde'";
                      // var_dump($data);
                      $data_res2 = mysqli_query($conn,$data);

              ?>
              <div id="regular-page">
                <table class="table my-4 bg-white">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>Enroll_No</th>
              <th>Student</th>
              <th><?php echo $_SESSION["student"]["sub"]?></th>
              <th>Result</th>

              </tr>
          </thead>

          <tbody>
          <?php
                    $val = 0;
                    while($rows = mysqli_fetch_assoc($data_res2)){
                      $val++;
                      $erNo = $rows["enroll_no"];
                      $student_name = $rows["student_name"];
                      $subOne = $rows[$_SESSION["student"]["sub"]];
                        if($subOne =="FF"){$result = "Fail";}
                        else{$result = "Pass";}
                       ?>

                      <tr>
                        <td><?php echo $val; ?></td>
                        <td><?php echo $erNo; ?></td>
                        <td><?php echo $student_name; ?></td>
                        <td><?php echo $subOne; ?></td>
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
                  <?php }?>
      </tbody>
    </table>
  </div>

    <div class="row m-2">
             <div class="col p-4 bg-grad-danger text-light">
                 <p>Percentage Grade %</p>
                 <h3><?php

                      $result_per = ($val/$_SESSION["total_students"])*100;
                      echo number_format((float)$result_per, 2, '.', '');

                     ?>

                    </h3>
             </div>
         </div>

  <?php

}
  ?>





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


