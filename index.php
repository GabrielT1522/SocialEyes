<html>
    <head>
        <title>Social Eyes</title>
        <link rel="stylesheet" href="SEstyle.css">
    </head>
    <body>
        <div id="header">
            <h1>Social Eyes <img src="eyes.png"/></h1>
        </div>

        <div id="menu">
            <h2 class="h2header">Menu</h2>
            <ul class="menulist">
                <li><a href="index.php">Main Page</a> </li>
                <li><a href="submitpost.php">New Post</a> </li>
            </ul>
        </div>

        <div id="main">
            <h2>Posts</h2>
            <?php
                $dbc = mysqli_connect('localhost', 'root', '', 'socialeyes');
                $q = "SELECT user, subject, message FROM posts";
                $r = mysqli_query($dbc, $q);

                while ($record = mysqli_fetch_array($r, MYSQLI_ASSOC)){
                    echo '<div class="content">';
                    echo '<h2>'.$record['subject'].'</h2>';
                    echo '<p>'.$record['message'].'</p>';
                    echo '<p>Posted by: '.$record['user'].'</p>';
                    echo '</div>';
                }
            ?>
    </body>
</html>