<?php

require_once('connection.php');

     if(isset($_POST['btn-save']))
     {

        $name = mysqli_real_escape_string($con,$_POST['name']);
        $dob = mysqli_real_escape_string($con,$_POST['dob']);
        $rollno = mysqli_real_escape_string($con,$_POST['rollno']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

        
        if($password!=$cpassword)
        {
            echo"password does not matched";
        }
        else{

            
            $sql= "insert into registration (name,dob,rollno,email,password) values('$name','$dob','$rollno','$email','$password')";
            $result= mysqli_query($con,$sql);
            if($result)
            {
                echo'your record have been saved into database';
            }
            else
            {
               echo 'incorrect connection';
            }
        }

    
    }
?>