<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>table 1</title>
    </head>
    <body>
        < ?php
            //connect to MySQL
            $db = mysql_connect(‘localhost’, ‘bp6am’, ‘bp6ampass’) or
die (‘Unable to connect. Check your connection parameters.’);
// make sure you’re using the right database
mysql_select_db(‘moviesite’, $db) or die(mysql_error($db));
? >
        <div style="text-align: center;" >
            <h2> Movie Review Database </h2>
            <table border="1" cellpadding="2" cellspacing="2" style="width: 70%; margin-left: auto; margin-right: auto;" >
                <tr>
                    <th>Movie Title</th>
                    <th>Year of Release</th>
                    <th>Movie Director</th>
                    <th>Movie Lead Actor</th>
                    <th>Movie Type</th>
                </tr>
            </table>
        </div>
    </body>
</html>
