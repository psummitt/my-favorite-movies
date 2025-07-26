<?php
session_start();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
    <?php
    if (isset($_GET['favorite'])){
        echo ' _ ';
        echo $_GET['favmovie'];
    }
    ?>
        </title>
    </head>
    <body>
    <?php include 'header.php'; ?>
    <?php
    $favmovies = array('Life of Brian',
                       'Stripes',
                       'Office Space',
                       'The Holy Grail',
                       'The Matrix',
                       'Terminator 2',
                       'Star Trek IV',
                       'Close Encounters of the Third Kind',
                       'Sixteen Candles',
                       'Caddyshack');
            
    if(isset($_GET['favmovie'])){
        echo 'Welcome to our site, ';
        echo $_SESSION['username'];
        echo '! <br/>';
        echo 'My favorite movie is ';
        echo $_GET['favmovie'];
        echo '<br/>';
        $movierate = 5;
        echo 'My movie rating for this movie is: ';
        echo $movierate;
    } else {
        echo 'My top ' . $_POST('num') . ' favorite movies';
        
        if (isset($_POST['sorted'])){
            sort($favmovies);
            echo ' (sorted alphabetically) ';
        }
        echo 'are:<br/>';
        
        $numlist = 0;
        echo '<ol>';
        while ($numlist < $_POST['num']){
            echo'<li>';
            echo $favmovies($numlist);
            echo '</li>';
            $numlist = $numlist + 1;
        }
        echo '</ol>';
    }
    ?>
</body>
</html>