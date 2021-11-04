<?php

session_start();

$html = file_get_contents('home.html');

$html = str_replace( '$$$common$$$', htmlspecialchars( '' ), $html );
$html = str_replace( '$$$/common$$$', htmlspecialchars( '' ), $html );
$html = str_replace( '$$$css$$$', htmlspecialchars( '' ), $html );

print($html);