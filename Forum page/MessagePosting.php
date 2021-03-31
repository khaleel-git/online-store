<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="MessagePosting.CSS">
<link rel="stylesheet" href="/Online forum application /Dynamic menu/DynamicMenu.CSS">
</head>

<body>
<div class="navbar">
            <a href="http://localhost/Online%20forum%20application/User area/UserArea.php">User</a>
            <a href="http://localhost/Online%20forum%20application/Forum page/MessagePosting.php">Message posting</a>
            <a href="#display">Display Message</a>
            <a href="http://localhost/Online%20forum%20application/Login page/login.php">Logout</a>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    <div class="container" >
            <form action="MessageDisplay.php" method="POST">
                <div class="row">
                    <div class="col-25">
                    <label for="subj">Subject:</label>
                    </div>
                    <div class="col-75">
                    <input type="text"  name="subj" placeholder="What is the subject topic.." required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                    <label for="msgTxt">Message Text:</label>
                    </div>
                    <div class="col-75">
                    <textarea id="msgTxt" name="msgTxt" rows="4" cols="50"></textarea>
                    </div>
                </div>

                <div class="row">
                    <!-- <div class="col-25"> -->
                        <!-- <label for="userImage">User Image</label> -->
                    <!-- </div> -->
                    <div class="col-75">
                        <label>Upload Image</label>
                        <input type="file" name="userImage" value="Upload Image">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                    <input type="submit" value="Submit" style="position:left">
                    </div>
                </div>

        </form>
    </div>
</body>
</html>