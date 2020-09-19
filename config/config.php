<?php
/**============================================================*
 * Ceci est un fichier de configuration pour la base de donnée * 
 * =========================================================== *
 * This is a configuration file for the database               *
===============================================================*/
//--------------------------------------------------------------/
/**============================================================*
 * Nom d'utilisateur de la base de donnée                      *
 * =========================================================== *
 * Username of Database                                        *
 ==============================================================*/
define('USER','root');
/**============================================================*
 * Mot de passe de la base de donnée                           *
 * =========================================================== *
 * Password of database                                        *
 ==============================================================*/
define('PASSWORD', '');
/**============================================================*
 * Nom du serveur de la base de donnée                         *
 * =========================================================== *
 * Server name                                                 *
 ==============================================================*/
define('HOST', 'localhost');
/**============================================================*
 * Nom de la Base de donneé                                    *
 * =========================================================== *
 * Database Name                                               *
 ==============================================================*/
define('DB_NAME', 'livecoding');
/**============================================================*
 * Erreur mysql                                                *
 * =========================================================== *
 * mysql error                                                 *
 ==============================================================*/
define('ERR', array('PDO::ATTR_ERRMODE' => 'PDO::ERRMODE_EXCEPTION', 'PDO::ATTR_DEFAULT_FETCH_MODE'=>'PDO::FETCH_OBJ'));