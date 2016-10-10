<?php

    session_start();
    $link = mysqli_connect("localhost", "cl18-users-qyp", "EDs-6tV-.", "cl18-users-qyp");
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $myusername = mysqli_real_escape_string($link,$_POST['email']);
        $mypassword = mysqli_real_escape_string($link,$_POST['pass']);
        $myConfirmPassword = mysqli_real_escape_string($link,$_POST['confirmpass']);
       // echo $myusername." ".$mypassword;
        
        $sql = "SELECT id FROM users WHERE email = '".$myusername."' ";
        $result = mysqli_query($link,$sql);
        $count = mysqli_num_rows($result);
        if($count==1){
            $error = '<div class="alert alert-danger" role="alert"><p>Already Registered.</p></div>';
        }else{
            $sql = "INSERT INTO users (`email`, `password`) VALUES('".$myusername."', '".$mypassword."')";
            $result = mysqli_query($link,$sql);
            $error = '<div class="alert alert-success" role="alert"><strong>Registered Sucessfully!</strong></div>';

            $loginBtn = '<a href="index.php" class="btn btn-primary btn-block active" role="button" aria-pressed="true">Home</a>';
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
        
        

    </style>
    <body>
        
        <div class="container">
            <div class="jumbotron">
                    <img src="RRlogin.jpg" style="height:200px;width:200px;" class="img-rounded m-x-auto d-block" alt="...">  
            <form method="post">
                <div class="form-group">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="pass" id="pass" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="pass" id="confirmpass" placeholder="Confirm Password">
                </div>
                <div class="form-group" id="registerbtn">
                    <button class="btn btn-info btn-block" type="submit" >Register</button>
                </div>
                <div id="error"><? echo $error.$loginBtn; ?>
                </div>

               

                
            </form>
                
                
                
            </div>
        </div>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
        
        
        <script type="text/javascript">
      
        $("form").submit(function(e){
            e.preventDefault();
            
            var error = "";
            
            if($("#email").val()==""){
                error += "Email field is required.<br>";
            }
            if($("#pass").val()==""){
                error += "Password field is required.<br>";
            }
            if($("#confirmpass").val()==""){
                error += "Confirm Password field is required.<br>";
            }
            if($("#pass").val()!=$("#confirmpass").val()){
                error += "Password does not match<br>";
            }
            
            if(error!=""){
                $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were errors!</strong></p>'+ error + '</div>');
            }else{
                $("form").unbind("submit").submit();
                
            }
            
            
            
        });
      
      
      
      </script>
        
        
        
        
        
        
        
    </body>
</html>
