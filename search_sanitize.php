<?php

$QUERY = $_GET['piracy'];
//do sanitization here
header("Location: /search/$QUERY");

?>
