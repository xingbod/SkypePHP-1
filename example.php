<?php
/*
   _____ _                     _____  _    _ _____  
  / ____| |                   |  __ \| |  | |  __ \ 
 | (___ | | ___   _ _ __   ___| |__) | |__| | |__) |
  \___ \| |/ / | | | '_ \ / _ \  ___/|  __  |  ___/ 
  ____) |   <| |_| | |_) |  __/ |    | |  | | |     
 |_____/|_|\_\\__, | .__/ \___|_|    |_|  |_|_|     
               __/ | |                              
              |___/|_|      
			  
Version: 1.2.1 by Kibioctet (admin@n-mail.fr)
GitHub : https://github.com/Kibioctet/SkypePHP
*/

header("Content-Type: text/plain");
set_time_limit(300);
require("skype.class.php");

$username = "your username";
$password = "your password";

$skype = new Skype($username, $password);

$skype->sendMessage("echo123", "Hello!");