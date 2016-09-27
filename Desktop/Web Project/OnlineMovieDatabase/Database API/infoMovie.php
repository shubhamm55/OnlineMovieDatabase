<?php
        include('tmdb-api.php');
        
        // if you have a $conf array - (See LIB_ROOT/configuration/default.php as an example)
        $tmdb = new TMDB($conf);   
    $movie = $tmdb->getMovie(tt0133093);
    echo '  <div class="panel panel-default">
                <div class="panel-body">
                   
                    <b>'. $movie->getTitle() .'</b>
                    <ul>
                        <li>ID: '. $movie->getID() .'</li>
                        <li>Tagline: '. $movie->getTagline() .'</li>
                        <li>Trailer: <a href="https://www.youtube.com/watch?v='. $movie->getTrailer() .'">link</a></li>
                    </ul>
                    <img src="'. $tmdb->getImageURL('w185') . $movie->getPoster() .'"/></li>
                </div>
            </div>';
?>