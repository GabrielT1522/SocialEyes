<html>
    <head>
        <title>New Post</title>
        <link rel="stylesheet" href="SEstyle.css">
    </head>
    <body>
        <div id="header">
            <h1>Social Eyes <img src="eyes.png"/></h1>
        </div>

        <div id="menu">
            <h2 class="h2header">Menu</h2>
            <ul class="menulist">
                <li> <a href="index.html">Main Page</a> </li>
                <li> <a href="submitpost.php">New Post</a> </li>
            </ul>
        </div>

        <div id="main">
            <div class="content">
                <?php
        
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                        $dbc = mysqli_connect('localhost', 'root', '', 'socialeyes');
                        $u = FALSE;
                        $s = FALSE;
                        $m = FALSE;
            
                        if (!empty($_POST['user'])){
                            $u = mysqli_real_escape_string($dbc, $_POST['user']);
                        }else{
                            echo '<p class="fail">"User" field is empty.</p>';
                        }

                        if (!empty($_POST['subj'])){
                            $s = mysqli_real_escape_string($dbc, $_POST['subj']);
                        }else{
                            echo '<p class="fail">"Subject" field is empty</p>';
                        }

                        if (!empty($_POST['msg'])){
                            $m = mysqli_real_escape_string($dbc, $_POST['msg']);
                        }else{
                            echo '<p class="fail">"Message" field is empty</p>';
                        }

                        // Post to database
                        if ($u && $s && $m){
                            $q = "INSERT INTO posts (user, subject, message) VALUES ('$u', '$s', '$m')";
                            $r = mysqli_query($dbc, $q);

                            if ($r){
                                echo '<p class="pass">Your post has been submitted. 
                                      You can see your post in the <a href="index.html">Main Page</a></p>';
                            }else{
                                echo '<p class="fail">Something went wrong. Your post was not submitted.</p>';
                            }

                        }

                    }

                ?>
                <h2>Create a New Post</h2>
                <form action="submitpost.php" method="post">
                    <p>User: <br><input type="text" name="user" maxlength="20"/> </p>
                    <p>Subject: <br><input type="text" name="subj" size="70" maxlength="250"/> </p>
                    <p>Message: <br><textarea name="msg" rows="8" cols="58" maxlength="500"></textarea> </p>            
                    <p><input type="submit" name="submit"/> </p>
                </form>
            </div>
        </div>

    </body>
</html>