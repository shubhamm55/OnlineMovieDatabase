<?php
        include('tmdb-api.php');
        
        // if you have a $conf array - (See LIB_ROOT/configuration/default.php as an example)
        $tmdb = new TMDB($conf);
         $tvShows = $tmdb->getTopRatedTVShows();
    echo '  <div class="panel panel-default">
                <div class="panel-heading">
                    Top Rated TVShows
                </div>
                <div class="panel-body">
                    <ul>';
    foreach($tvShows as $tvShow){
        echo '          <li>'. $tvShow->getName() .' (<a href="https://www.themoviedb.org/tv/'. $tvShow->getID() .'">'. $tvShow->getID() .'</a>)</li>';
    }
    echo '          </ul>
                </div>
            </div>';

            ?>