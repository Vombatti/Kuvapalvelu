<?php
require_once('config/config.php');
//tuhotaan sessio
   session_unset();
   session_destroy();

//tuhoa sessio!
redirect('index.php'); //siirry kotisivulle
?>