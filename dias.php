<?php

$data = new DateTime('2003-03-28');
$dataHj = new DateTime('2022-08-17');

$intervalo = $data->diff($dataHj);
echo $intervalo->format('%R%a dias');