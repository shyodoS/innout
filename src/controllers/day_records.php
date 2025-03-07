<?php 
session_start();
requireValidSession();
$date = (new DateTime())->getTimestamp();
setlocale(LC_ALL, 'pt_BR.utf-8');
date_default_timezone_set('America/Brasilia');
$uppercaseMonth = ucfirst(gmstrftime('%B'));
$today = utf8_encode(strftime( '%A, %d de ' .$uppercaseMonth. ' de %Y', strtotime('today')));
loadTemplateView('day_records', ['today' => $today]);
?>