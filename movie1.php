<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Find my Favorite Movie!
        </title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <?php
            $myfavmovie = urlencode('Life of Brian');
            echo "<a href='moviesite.php?favmovie=$myfavmovie), '>";
            echo 'Click here to see information about my favorite movie!';
            echo '</a>';
        ?>
        <br/>
        <br/>
        Or choose how many movies you would like to see:
        <br/>
        <form method="post" action="moviesite.php">
                <label for "num">
                    Enter the number of movies you would like to see (up to 10):
                </label>
                    <input type="text" id="num" name="num" maxlength="2" size="2" />
                <br/>
                Check to sort them alphabetically:
                <Input type="checkbox" name="sorted" />
                <br/>
            </p>
            <input type="submit" name="submit" value="Submit" />
        </form>
    </body>
</html>