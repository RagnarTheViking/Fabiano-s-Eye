<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:46 PM
     */
    error_reporting(error_reporting() & ~E_NOTICE);
    $thing = $_GET['page'];
    if (isset($thing))
        if ($thing == 1)
            require_once('banana/template/feedpower.php');
        elseif ($thing == 2)
            require_once('banana/template/feedpower2.php');
        else
            require_once('banana/template/feedpower.php');
    else
        require_once('banana/template/feedpower.php');
?>
