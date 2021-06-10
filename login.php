<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID VACCINATION PORTAL</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="login">
<body background="x.jpeg" >
    <div class="container-fluid" >
    <br></br>
        <h2>Registration</h2>

        <br></br>
    <br></br>

        <div class="myform">
            <form class="" id="" name="" method="post" action="">

                <div class="row bg-success">
        <label for="name">Name :</label>
        <input type="text" placeholder="Enter your name" name="name" required>
        <br></br>
        <label for="pass"> Password :</label>
        <input type="password" placeholder="Enter your password" name="pass" required><br></br>
        <label for="age">Age :</label>
        <input type="digits" placeholder="Enter your age" name="age" required><br></br>
        <label for="Gender">Gender :</label>
        <select class ="form-control" name="gender">
            <option>Female</option>
            <option>Male</option>
            <br></br></select>
        <label for="Adhaar card no."> Adhaar card no.:</label>
        <input type="text" placeholder="Enter your Adhaar card no." name="Adhaar" required><br></br>

        <label for="Type of Vaccine :">Type of Vaccine </label>
      <select class="form-control" name="typeofvaccine">
        <option>Covaxin</option>
        <option>Covisheild</option>
        <option>Sputnik-V</option>
      
      </select>
      <br></br>

      <label for="Choose a Day:">Choose a Day </label>
      
      
      <br></br>

      <select class="form-control" name="day">
        <option>Monday</option>
        <option>Tuesday</option>
        <option>Wednesday</option>
        <option>Thursday</option>
        <option >Friday</option>
      </select>
      <br></br>
      <br></br>
      <input type="submit" class="btn btn-success" name="btn" value="Register">






</div>



</body>
</html>
<?php
$con =  mysqli_connect('localhost','root','','mydatabase');
//if($con)
//{
   // echo('connect success');
//}else{
    //echo('not success');
//}
if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $Adhaar=$_POST['Adhaar'];
    $typeofvaccine=$_POST['typeofvaccine'];
    $day=$_POST['day'];
    $sql ="insert into mytable(name,age,gender,Adhaar,typeofvaccine,day)
    values('$name','$age','$gender','$Adhaar','$typeofvaccine','$day')" or die();
    if($con->query($sql)===TRUE){
        echo('Congrats!!!!! your registration is successful,');
        echo(' you are soon going to be an Anti masker!!!!');
    }
    else{
        echo "Error:".$sql. "<br>".$con->error;
    }

}
$con->close();



?>