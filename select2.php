<!DOCTYPE html>
<?php
$db = mysql_connect('localhost', 'paulmsummitt', 'N3ws8@10!') or die ("Unable to connect. Check your connection parameters.");
mysql_select_db('moviesite', $db) or die(mysql_error($db));

// select the movie titles and their genre after 1990
$query = 'SELECT movie.movie_name, movie_type.movietype_label
          FROM movie, movietype
          WHERE movie.movie_type = movietype.movietype_id AND movie_year > 1990
          ORDER BY movie_type';
$result = mysql_query($query, $db) or die(mysql_error($db));

// show the results
echo '<table border=”1”>';
while ($row = mysql_fetch_assoc($result)) {
    echo '<tr>';
    foreach ($row as $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';