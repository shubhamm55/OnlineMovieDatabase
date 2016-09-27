<?php
        include('tmdb-api.php');
        
        // if you have a $conf array - (See LIB_ROOT/configuration/default.php as an example)
        $tmdb = new TMDB($conf);
        
    $found = $tmdb->find('tt0133093');
    $movies = $found['movies'];

    echo '  <div class="panel panel-default">
                <div class="panel-body">
                    tt0133093 would be a IMDB id.
                    <ul>';
    foreach($movies as $movie){
        echo '          <li>'. $movie->getTitle() .' (<a href="https://www.themoviedb.org/movie/'. $movie->getID() .'">'. $movie->getID() .'</a>)</li>';
    }
    echo '          </ul>
                </div>
            </div>';
?>