<?php

if ( $_POST['payload'] ) {


    // If there is already a repo, just run a git pull to grab the latest changes
    shell_exec("git pull");

    die("done " . mktime());

} else  {
    
    shell_exec("git pull");
}

