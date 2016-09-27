<?php
        include('tmdb-api.php');
        
        $tmdb = new TMDB($conf);
        
    $collections = $tmdb->searchCollection("the hobbit");

    echo '  <div class="panel panel-default">
                <div class="panel-body">
                    <ul>';
                    <head>
        <title>Movie DB</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        
    </head>
    
    <body>
        <div class="page-header">
            <h1 style="color: #ffe695; position:relative ;top:15px">pop-Korner</h1>
            <div class="dropdown dropdownuser">
            <button type="button" class="btn dropdown-toggle userbtn" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span>
                    <span class="caret"></span>
            </button>
                    <ul class="dropdown-menu">
                            <li><a href="profile.html">*USERNAME*</a></li>
                        <li class="divider"></li>
                            <li><a href="#BACK TO MAIN PAGE MODI">Sign Out  <span class="glyphicon glyphicon-log-out"></span></a></li>
                    </ul>
            </div>
        </div>
        <div class="container">
        <ul class="nav nav-pills">
            <li class="active"><a href="layout.html">Home</a></li>
            <li><a href="movies.html">Movies</a></li>
            <li><a href="tv.html">TV Shows</a></li>
            <li><a href="anime.html">Anime</a></li>
        </ul>
    foreach($collections as $collection){
        echo '          <li>'. $collection->getName() .' (<a href="https://www.themoviedb.org/collection/'. $collection->getID() .'">'. $collection->getID() .'</a>)</li>';
    }
    echo '          </ul>
                </div>
            </div>';
?>