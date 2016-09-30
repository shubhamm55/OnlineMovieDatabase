<?php
include('tmdb-api.php');
include('Configuration\default.php');
$tmdb = new TMDB($cnf);
$tvShows= $tmdb->getDiscoverTVShows();
foreach ($tvShows as $tvshow) 

{   
    echo'<p>ID:'. $tvshow->getID() .'</p>';
    echo '<p>'.$tvshow->getName().' </p>';  
    echo'<p>'.$tvshow->getOverview() .'</p>';
    echo'<p>Vote:'.$tvshow->getVoteCount().'</p>';
    //echo'<p>'. $tvshow->getNumSeasons() .'</p>';
    echo'<img src="'. $tmdb->getImageURL('w185') . $tvshow->getPoster() .'"/>';
}
?>  