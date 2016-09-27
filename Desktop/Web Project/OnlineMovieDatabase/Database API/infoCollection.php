<?php
        include('tmdb-api.php');
        
        $tmdb = new TMDB($conf);
        
    $collection = $tmdb->getCollection(121938);

    echo '  <div class="panel panel-default">
                <div class="panel-body">
                   
                    <b>'. $collection->getName() .'</b>
                    <ul>
                        <li>ID: '. $collection->getID() .'</li>
                        <li>Overview: '. $collection->getOverview() .'</li>
                        <li>Movies: 
                            <ul>';
    $movies = $collection->getMovies();
    foreach ($movies as $movie) {
        echo '                  <li>'. $movie->getTitle() .' (<a href="https://www.themoviedb.org/movie/'. $movie->getID() .'">'. $movie->getID() .'</a>)</li>';
    }
    echo '                  </ul>
                        </li>
                    </ul>
                    <img src="'. $tmdb->getImageURL('w185') . $collection->getPoster() .'"/>
                </div>
            </div>';
?>