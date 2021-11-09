<?php
date_default_timezone_set('America/Sao_Paulo');
$agora = new DateTime();
echo "Data e horário, atuais: " .$agora->format('d/m/Y - H:i:s')."\n";
echo "___________________________________________________\n\n";

$data = new DateTime();
$intervalo = new DateInterval('P5DT10H50M');
$data->sub($intervalo);
echo "Data e horário, atuais - 5 Dias, 10 Horas e 50 Minutos = " .$data->format('d/m/Y - H:i:s') . PHP_EOL;