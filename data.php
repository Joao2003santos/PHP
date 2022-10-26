<?php

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

$nome = "João Vìtor Santos <br>";



echo "$nome". strftime('%A, %d de %B de %Y', strtotime('today'));
