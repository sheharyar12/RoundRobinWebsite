<?php 

    $link = mysqli_connect("localhost","cl18-users-qyp","","cl18-users-qyp");


    if(mysqli_connect_error()){
        die ("There was an error connecting to database");
    }

    

    

    $query = "select * from users";

    if($result = mysqli_query($link, $query)){
        
        While($row = mysqli_fetch_array($result)){
            print_r($row);
            
        }
        
        
       
    }


?>.$mypassword."'";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result);
      
        
        $count = mysqli_num_rows($result);
        
        if($count == 1) {
            session_register("email");
            $_SESSION['login_user'] = $myusername;

            header("location: welcome.php");
        }else {
           $error = '<div class="alert alert-danger" role="alert"><strong>Invalid Login</strong></div>';
        }



    }


    



?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    </head>
    
    <style type="text/css">
        
        body{
            background: url('loginbg.jpg') no-repeat center center fixed;
        }
        
        .jumbotron{
            margin-top: 150px;
            background: rgb(30,40,50);
            width: 400px;
            margin-left: 300px;

        }
        
        .container{
            width:100%;
        }
        
        #icon{
            
            width:100%;
            
            
        }

        .form-group{
            margin-top: 30px;
        }
        
        .form-control {
            background:none;
            border:none;
            border-bottom:1px solid #434a52;
            border-radius:0;
            box-shadow:none;
            outline:none;
            color:inherit;
         }

        btn{
            background: 523D80;
            color:523D80;
        }  
        #registerbtn{
            margin-top: 10px;
            text-align: center;    
        }
        
        #error{
            margin-top: 10px;
        }
    </style>
    <body>
        
        <div class="container">
            <div class="jumbotron">
                    <img src="RRlogin.jpg" style="height:200px;width:200px;" class="img-rounded m-x-auto d-block" alt="...">  
            <form method="post">
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="pass" placeholder="Password">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Log in</button>
                </div>
                <div class="form-group" id="registerbtn">
                    <a href="register.php" class="btn btn-info btn-block" role="button" aria-pressed="true">Register</a> 
                </div>
                
                <a class="forgot" href="#">Forgot your email or password?<br></a>
                <div id="error"><? echo $error; ?>
                </div>
            </form>
                
                
                
            </div>
        </div>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    </body>
</html>
