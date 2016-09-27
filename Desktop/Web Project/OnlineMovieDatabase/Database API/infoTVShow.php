<?php
include('tmdb-api.php');
        
        // if you have a $conf array - (See LIB_ROOT/configuration/default.php as an example)
        $tmdb = new TMDB($conf);
    $tvShow = $tmdb->getTVShow(604);
      
    echo '  <div class="panel panel-default">
                <div class="panel-body">
                    Now the <b>$tvShow</b> var got all the data, check the <a href="http://code.octal.es/php/tmdb-api/class-TVShow.html">documentation</a> for the complete list of methods.<br><br>

                    <b>'. $tvShow->getName() .'</b>
                    <ul>
                        <li>ID:'. $tvShow->getID() .'</li>
                        <li>Overview: '. $tvShow->getOverview() .'</li>
                        <li>Number of Seasons: '. $tvShow->getNumSeasons() .'</li>
                        <li>Seasons: 
                            <ul>';
            $seasons = $tvShow->getSeasons();
            foreach($seasons as $season){
                echo '          <li><a href="https://www.themoviedb.org/tv/season/'. $season->getID() .'">Season '. $season->getSeasonNumber() .'</a></li>';
            }
            echo '          </ul>
                        </li>
                    </ul>
                    <img src="'. $tmdb->getImageURL('w185') . $tvShow->getPoster() .'"/>
                </div>
            </div>';