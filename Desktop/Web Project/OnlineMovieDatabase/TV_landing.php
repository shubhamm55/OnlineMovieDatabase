<?php

include('Database API\tmdb-api.php');
include('Database API\Configuration\default.php');

$tmdb = new TMDB($cnf);

$id = $_GET['id'];



        $tmdb = new TMDB($cnf);
    $tvShow = $tmdb->getTVShow($id);
      
    echo '  <div class="panel panel-default">
                <div class="panel-body">
                    

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
?>