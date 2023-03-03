<?php

require_once('config.php');

echo session_save_path();

echo '<hr>';

var_dump(session_status());

?>