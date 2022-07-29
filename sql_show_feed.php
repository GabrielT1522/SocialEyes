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