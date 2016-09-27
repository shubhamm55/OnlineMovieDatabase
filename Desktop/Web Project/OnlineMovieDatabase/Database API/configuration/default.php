<?php

//------------------------------------------------------------------------------
// Default Configuration
//------------------------------------------------------------------------------

// Global Configuration
$cnf['apikey'] = 'b341fc9b6b248e898094eb8a23845480';
$cnf['lang'] = 'en';
$cnf['timezone'] = 'Europe/Berlin';
$cnf['adult'] = true;
$cnf['debug'] = false;

// Data Return Configuration - Manipulate if you want to tune your results
$cnf['appender']['movie'] = array('trailers', 'images', 'credits', 'translations', 'reviews');
$cnf['appender']['tvshow'] = array('trailers', 'images', 'credits', 'translations', 'keywords');
$cnf['appender']['season'] = array('trailers', 'images', 'credits', 'translations');
$cnf['appender']['episode'] = array('trailers', 'images', 'credits', 'translations');
$cnf['appender']['person'] = array('movie_credits', 'tv_credits', 'images');
$cnf['appender']['collection'] = array('images');
$cnf['appender']['company'] = array('movies');

?>