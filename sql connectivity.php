<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <style>
        .A
        {
          width: 600px;
          height: 40px;
          float: right;
          padding: 100px;
        }
          img
          {
            border-radius: 10px;
            box-shadow: 2px 5px 6px black;
            background-image:url("mapple leaf.jpg");
          }
          </style>
</head>
<body>
    <form action="sql connectivity.php" method="POST">
        <center>
            <table>
                <fieldset style="width:250px; margin: top 150px;">
                <h1>DEVOTEE PLACES</h1>
                <input style="width:200px;" name="name" type="text" placeholder="enter your name">
                <br>
                <br>
                <input style="width:200px;" name="password" type="text" placeholder="password">
                <br>
                <br>
                <<button type="submit" style="background-color:blue;border-color:blue;width:170px;">login</button>
                <br>
                <br>
                      <div>________________or_______________</div>
                           <br>
                           <br>
                            <center>
                                    <a href="" style="color:blue">log in with facebook</a>
                                    <br>
                                    <br>
                 <center>
                    <a href="" style="color:blue">forgot password</a>
                </center>
                <br>
                <br>
                    
                </fieldset>
                <!--<fieldset style=width:250px;>
                    <ul>Don't have any account?<a href=""style="color:blue">sign up</a><ul>
      </fieldset> -->
</table>
      </center>
            </form>
                  </body>

</html>

<?php
$email=$_POST['name'];
$name=$_POST['password'];
echo$email;
echo"<br>";
echo$name;
echo"<br>";

$username='root';
$servername='localhost';
$password='';
$database='tanisha';

$conn=mysqli_connect($servername,$username,$password,$database);
// $query="INSERT INTO'devotees'('email','name')VALUES('$email','$name');
$query="INSERT INTO `insta1` (`username`, `password`) VALUES ('$email', '$name');";
$result=mysqli_query($conn,$query);

?>