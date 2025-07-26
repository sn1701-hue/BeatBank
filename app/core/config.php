<?php
if($_SERVER['SERVER_NAME'] == "localhost")
{
    define ("ROOT", "https://ggc900207469.altervista.org/htdocs/BeatBank/public/");
    //for local server
    define ("DBDRIVER", "mysql");
    define ("DBHOST", "localhost");
    define ("DBUSER", "ggc900207469");
    define ("DBPASS", "");
    define ("DBNAME", "my_ggc900207469");
}else{
    define ("ROOT", "https://ggc900207469.altervista.org/htdocs/BeatBank/public/");
    //for online server
    define ("DBDRIVER", "mysql");
    define ("DBHOST", "localhost");
    define ("DBUSER", "ggc900207469");
    define ("DBPASS", "");
    define ("DBNAME", "my_ggc900207469");
}

