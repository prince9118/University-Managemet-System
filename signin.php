
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-image: url("images\downloadhuu.jpg");
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }  
         
 form {   
        border: 3px solid #f1f1f1; 
        width:40%;
        style="text-align:center"  
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>
<center> 
<body>    
     <h1> Student Login Form </h1>   
    <form method="POST" action="welcome.php">  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="name" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit" name="login">Login</button>   
              
              
            <p>new User</p> <a href="register.php"> Registration</a>  
        </div> 
         
    </form>     
</body> 
</center>  
<a href=mainpage.html>Home </a> 
</html>  