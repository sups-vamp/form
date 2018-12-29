<html>
   <head>
      <title>
         form
      </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
         *{
         margin: 0;
         }
         body  {
         background: linear-gradient(to bottom, #673ab7 0%,#673ab7 25%, #d1c4e9 25%,#d1c4e9 100%); 
         background-attachment: fixed;
         }
         table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#eee8f3;}
         .formmain{
         margin-top: 4%;
         background: white;
         box-shadow: 0 2px 2px 0;
         width:50%;
         height:inherit;
         text-align: left;
         padding: 30px;
         padding-left: 30px;
         margin-bottom: 10%;
         padding-bottom: 5%;
         }
         input[type=text],textarea
         {
         width:80%;
         height: 5%;
         background: none;
         padding: 10px;
         margin-top: 0;
         margin-bottom: 0;
         margin-left: 20px;
         border-style: none;
         border-bottom: solid;
         border-bottom-color: gainsboro;
         font-size: 20px;
         color: darkgray;
         }
         .input-name{
         position: relative;
         /*              display: inline-block;*/
         width: 80%;
         overflow: hidden;
         }
         .main{
         margin-top: 20px;}
         .input-name > input[type=text]{
         border: none;
         border-bottom: 2px solid lightgray;
         outline: none;
         }
         .underline-animation{
         transition: all 0.5s;
         display: inline-block;
         bottom: 0;
         left: -100%;
         position: absolute;
         width: 100%;
         height: 2px;
         background-color: red;
         }
          .error {color: #FF0000;}
         .input-name > input[type=text]:focus + .underline-animation
         {
         left: 0;
         }
         .text{
         margin-left: 20px;
         font-size: 20px;
         margin-top: 20px;
         margin-bottom: 0;
         }
         footer{
         padding-left: 20px;
         padding-bottom: 20px;
         }
         .head{
         font-size: 20px;
         color: white;
         margin-left: 30px;
         margin-top: 20px;
         font-weight: 600;
         }
         .btn{
         background: #673ab7;
         color:white;
         border: none;
         float: left;
         margin-left: 30px;
         }
         .progress{
         width: 30%;
         float: right;
         height: 5px;
         margin-top: 5px;
         }
         .main{
         width: 90%;
         display: inline-block;
         }
         .text-right{
         margin-left: 80%;
         font-size: 13px;
         }
      </style>
   </head>
   <body>
 
       
       <?php
                 if(isset($_POST['s']))
                 {
$servername="localhost";
$username="root";
$password="";
$dbname="gits";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$a=$_POST['name'];
$b=$_POST['age'];
$c=$_POST['sex'];
$d=$_POST['ins'];
$e=$_POST['course'];
$f=$_POST['club'];
$g=$_POST['comm'];
$sql = "insert into tab2 values('$a','$b','$c','$d','$e','$f','$g')";
                     if (mysqli_query($conn, $sql))
      {
        $last_id = mysqli_insert_id($conn);
        //echo "New record created successfully. Last inserted ID is: " . $last_id;
      }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
mysqli_close($conn);
                 }
            ?>
       
       
       
      <div class="head">
         <font face="comic sans ms">The Club form</font> 
      </div>
      <center>
         <div class="formmain">
            <ul class="nav nav-tabs">
               <li class="active"><a data-toggle="tab" href="#1">self</a></li>
               <li><a data-toggle="tab" href="#2">interest</a></li>
               <li><a data-toggle="tab" href="#3">responses</a></li>
            </ul>
            <div class="tab-content">
               <div id="1" class="tab-pane fade in active">
                  <h1>Personal</h1>
                  <form method="post" action="">
                     <div class="text">Name</div>
                     <br>
                     <div class="input-name">
                        <input type="text" name="name" required>
<!--                         <span class="error"> <?php echo $nameErr;?></span>-->
                        <span class="underline-animation"></span><br>
                     </div>
                     <div class="text">  Age</div>
                     <br>
                     <div class="input-name">
                        <input type="text" name="age" required>
<!--                         <span class="error"> <?php echo $ageErr;?></span>-->
                        <span class="underline-animation"></span><br>
                     </div>
                     <div class="text">Sex:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" value="male" required name="sex">Male&nbsp;&nbsp;&nbsp;
                        <input type="radio" value="female" required name="sex">Female
                     </div>
                     
                     <div class="text"> Institution</div>
                     <br>
                     <div class="input-name">
                        <input type="text" name="ins">
                        <span class="underline-animation"></span><br>
                     </div>
                     <div class="text">  Course</div>
                     <br>
                     <div class="input-name">
                        <input type="text" name="course">
                        <span class="underline-animation"></span><br>
                     </div>
                     <br>
                     <div class="main">
<!--                      <input type="submit" class="btn btn-info" value="Submit" name="v">-->
                        <div>
                           <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50"
                                 aria-valuemin="0" aria-valuemax="100" style="width:50%;background-color: #673ab7;">
                              </div>
                              <br>
                           </div>
                           <br>
                           <div class="text-xs-center text-right" id="example-caption-5">Page 1 of 2</div>
                        </div>
                     </div>
<!--                  </form>-->
               </div>
               <div id="2" class="tab-pane fade">
                  <h1>Your interest</h1>
<!--                  <form method="post">-->
                     <div class="text">Choose your club:<br><font size="3">
                        <input type="checkbox" value="heritage" name="club">&nbsp;Heritage club<br>
                        <input type="checkbox" value="beats" name="club">&nbsp;Beats<br>
                        <input type="checkbox" value="nss" name="club">&nbsp;NSS<br>
                        <input type="checkbox" value="ncc" name="club">&nbsp;NCC<br>
                        <input type="checkbox" value="rollers" name="club">&nbsp;Rollers<br>
                        </font>
                     </div>
                     <div class="text">Why do you want to join this club?</div>
                     <br>
                     <textarea name="comm"></textarea>
                     <div class="main">
                        <input type="submit" class="btn btn-info" value="Submit" name='s'> 
                        <div>
                           <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
                                 aria-valuemin="0" aria-valuemax="100" style="width:100%;background-color: #673ab7;">
                              </div>
                              <br>
                           </div>
                           <br>
                           <div class="text-xs-center text-right" id="example-caption-5">Page 2 of 2</div>
                        </div>
                     </div>
                  </form>
               </div>
               <div id="3" class="tab-pane fade">
                   <h1>Responses</h1>
                   <br>
                  <?php
                   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gits";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 
$sql1="SELECT * FROM tab2";
                   $result = mysqli_query($conn,$sql1);

 

echo "<table>
<tr>
<th>NAME</th>
<th>AGE</th>
<th>SEX</th>
<th>INSTITUTE</th>
<th>COURSE</th>
<th>CLUB</th>
</tr>";

 

while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['institute'] . "</td>";
  echo "<td>" . $row['course'] . "</td>";
  echo "<td>" . $row['club'] . "</td>";
  echo "</tr>";
  }

echo "</table>";
mysqli_close($conn);
                   
?>


                   
               </div>
            </div>
         </div>
      </center>
      <footer>
         All rights reserved&copy;
      </footer>
   </body>
</html>