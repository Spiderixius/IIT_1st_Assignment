<?php

// router.php that routes any php or html to index.php which will handle it
// everything else is staticly served
if (!preg_match('/\\.(html|php)$|^[^.]*$/', $_SERVER['REQUEST_URI'])) {
    return false;    // serve the requested resource as-is.
} else { 
    echo "<p>404</p>";
}

require $_SERVER['DOCUMENT_ROOT']. '/public/index.php'

?>