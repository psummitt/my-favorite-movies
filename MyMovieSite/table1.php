<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>table 1</title>
  </head>

<?php
//connect to MySQL
$db = mysql_connect(‘localhost’, ‘bp6am’, ‘bp6ampass’) or
    die (‘Unable to connect. Check your connection parameters.’);

// make sure you’re using the right database
mysql_select_db(‘moviesite’, $db) or die(mysql_error($db));

// retrieve information
$query = ‘SELECT movie_name, movie_year, movie_director, movie_leadactor, movie_type
    FROM
        movie
    ORDER BY
        movie_name ASC,
        movie_year DESC’;
$result = mysql_query($query, $db) or die(mysql_error($db));

// determine number of rows in returned result
$num_movies = mysql_num_rows($result);
?>
  <body>
<div style=”text-align: center;” >
    <h2> Movie Review Database </h2>
    <table border=”1” cellpadding=”2” cellspacing=”2” style=”width: 70%; margin-left: auto; margin-right: auto;” >
        <tr>
            <th>Movie Title</th>
            <th>Year of Release</th>
            <th>Movie Director</th>
            <th>Movie Lead Actor</th>
            <th>Movie Type</th>
        </tr>
<?php
// loop through the results
while ($row = mysql_fetch_assoc($result)) {
    extract($row);
    echo ‘<tr>’;
    echo ‘<td>’.$movie_name.‘</td>’;
    echo ‘<td>’.$movie_year.‘</td>’;
    echo ‘<td>’.$movie_director.‘</td>’;
    echo ‘<td>’.$movie_leadactor.‘</td>’;
    echo ‘<td>’.$movie_type.‘</td>’;
    echo ‘</tr>’;
}
?>
    </table>
   <p><?php echo $num_movies; ?>Movies</p>
< /div >
</body>
</html>