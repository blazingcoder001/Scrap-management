<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/4745cd6478.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
  </head>
  <body>
      <div class="form_bg">
          <div class="container">
              <div class="row">
                  <div class=" col-md-4 offset-md-4 col-sm-6 offset-sm-3 ">
                      <form class="form_horizontal">
                          <div class="form_icon"><i class="fas fa-user-circle"></i></div>
                           <h1 class="title">Login Form</h1>


<form name="Registration" action="" method="post">
                            <div class="form-group">
                                <span class="input-icon"><i class="far fa-user"></i></span>
                                 <input class="form-control" type="text" name="email-address" placeholder="email-address" >

                            </div>   
                            <div class="form-group">
                                <div class="input-icon"><i class="fas fa-lock "></i></div>  
                                 <input class="form-control" type="password" name="password" placeholder="password" >
                                 
                            </div>  

                            /*<div class="btn"><a href="vaccine.html" target="blank" class="login">Login</a></div>*/
			<div><input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"></div>
</form>
<?php

	$db=mysqli_connect("localhost","root","","scrapost");  
					/* server name, username, passwor, database name */

?>
<?php

      if(isset($_POST['submit']))
      {
        $count=0;

        $sql="SELECT username from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `customerlogin` VALUES('$_POST[email-address]', '$_POST[password]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>
                            <ul class="form-options">
                                <li><a href="#">Forgot Username/Password</a></li>
                                <li><a href="register.html">Create New Account</a></li>
                            </ul>
                      </form>
                  </div>
              </div>

          </div>
      </div>
   


 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     
    
  </body>
</html>