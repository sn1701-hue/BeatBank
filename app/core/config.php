<?php
if($_SERVER['SERVER_NAME'] == "localhost")
{
    define ("ROOT", "https://github.com/sn1701-hue/BeatBank/tree/main/public");
    //for local server
    define ("DBDRIVER", "mysql");
    define ("DBHOST", "localhost");
    define ("DBUSER", "ggc900207469");
    define ("DBPASS", "");
    define ("DBNAME", "my_ggc900207469");
}else{
    define ("ROOT", "https://github.com/sn1701-hue/BeatBank/tree/main/public");
    //for online server
    define ("DBDRIVER", "mysql");
    define ("DBHOST", "localhost");
    define ("DBUSER", "ggc900207469");
    define ("DBPASS", "");
    define ("DBNAME", "my_ggc900207469");
}

