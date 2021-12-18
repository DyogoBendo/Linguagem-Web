<?php
    const DIAS_NO_ANO = 365; # número de dias em um ano
    const TEMPO_PERDIDO_CIGARRO = 11;  # tempo perdido, em minutos, para cada cigarro fumado

    $cigarros_dia = 10;  # número de cigarros por dia
    $numero_anos = 3;
    $numero_dias = $numero_anos * DIAS_NO_ANO;    
    $total_cigarros = $cigarros_dia * $numero_dias;
    $total_tempo_perdido_minutos = TEMPO_PERDIDO_CIGARRO * $total_cigarros;

    
    $total_tempo_perdido_horas = intdiv($total_tempo_perdido_minutos, 60);
    $tempo_perdido_minutos = $total_tempo_perdido_minutos - (60 * intdiv($total_tempo_perdido_minutos, 60));

    $total_tempo_perdido_dias = intdiv($total_tempo_perdido_horas, 24);
    $tempo_perdido_horas = $total_tempo_perdido_horas - (24 * intdiv($total_tempo_perdido_horas, 24));

    $tempo_perdido_meses = intdiv($total_tempo_perdido_dias, 30);
    $tempo_perdido_dias = $total_tempo_perdido_dias - (30 * intdiv($total_tempo_perdido_dias, 30));

    $resultado = "<p> Ao fumar cigarro <strong> 10 </strong> vezes ao dia, por <strong >3 </strong> anos uma pessoa perderia aproximadamente:</p>
        <p> {$tempo_perdido_meses} <strong> meses </strong>, {$tempo_perdido_dias} <strong> dias </strong>, {$tempo_perdido_horas} <strong> horas </strong> e {$tempo_perdido_minutos} <strong> minutos </strong></p>";
    echo $resultado;
    