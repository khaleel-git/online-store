<!DOCTYPE html>
<html>
<head>
<title>Register Page </title>
<link rel="stylesheet" href="Register.CSS">
</head>
    <body>
        <div class="container">
            <form action="Login.php" method="POST">
                <div class="row">
                    <div class="col-25">
                    <label for="id">ID:</label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="id" placeholder="Your unieque id..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                    <label for="username">User name:</label>
                    </div>
                    <div class="col-75">
                    <input type="text"name="username" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                    <label for="password">Password:</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="password" name="password" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="userImage">User Image</label>
                    </div>
                    <div class="col-75">
                        <label>Upload Image</label>
                        <input type="file" name="userImage" value="Upload Image">
                    </div>
                </div>

                <div class="row">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
    </body>
</html>