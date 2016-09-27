<?php
        include('tmdb-api.php');
        
        // if you have a $conf array - (See LIB_ROOT/configuration/default.php as an example)
        $tmdb = new TMDB($conf);
        
    $companies = $tmdb->searchCompany("Sony"); 

    echo '  <div class="panel panel-default">
                <div class="panel-body">
                    <ul>';
    foreach($companies as $company){
        echo '<li>'. $company->getName() .' (<a href="https://www.themoviedb.org/company/'. $company->getID() .'">'. $company->getID() .'</a>)</li>';
    }
    echo '          </ul>
                </div>
            </div>';
?>