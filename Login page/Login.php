<?php

//Redirect to the registariton page
    if(isset($_POST["regBtn"]))
    {
        header("Location:http://localhost/Online%20forum%20application/Register%20page/Register.php");
        exit();
    }
   

?>



<!DOCTYPE html>
<html>
    <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="Login.CSS" type="text/css">
    </head>
        <body>
      
            <div class="container">
                <form action="LoginConnection.php" method="POST">
                    <div class="row">
                        <div class="col-25">
                        <label for="idLgn">ID:</label>
                        </div>
                        <div class="col-75">
                        <input  type="text" id = "id" name="id" placeholder="Your unieque id.." required />
                        </div>
                    </div>

                <div class="row">
                        <div class="col-25">
                        <label for="password">Password:</label>
                        </div>
                        <div class="col-75">
                        <input type="text" id="password" name="password" required />
                        </div>
                    </div>

                    <div class="row">
                        <input type="submit" value="Login" style="margin:5px">
                        <p><a href="http://localhost/Online%20forum%20application/Register page/Register.php" style="margin:5px">Register</a></p>

                        <!-- <input type="submit" name="regBtn" value="Register" style="margin:5px">  -->
                    </div>
                </form>
            </div>
    </body>
</html>