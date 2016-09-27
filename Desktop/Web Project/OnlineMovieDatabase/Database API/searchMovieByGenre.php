<?php
        include('tmdb-api.php');
        
        // if you have a $conf array - (See LIB_ROOT/configuration/default.php as an example)
        $tmdb = new TMDB($conf);
        
    $movies = $tmdb->getMoviesByGenre(28);

    echo '  <div class="panel panel-default">
                <div class="panel-body">
                    <ul>';

    foreach($movies as $movie){
        echo '          <li>'. $movie->getTitle() .' (<a href="https://www.themoviedb.org/movie/'. $movie->getID() .'">'. $movie->getID() .'</a>)</li>';
    }

    echo '          </ul>
                </div>
            </div>';
?>