<?php

include('Database API\tmdb-api.php');

$tmdb = new TMDB($conf);

$id = $_GET['id'];

$movie = $tmdb->getMovie($id);
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