<?php
    
    $cigarrosDia = 10;
    $numeroAnos = 3;
    $numeroDias = $numeroAnos * diasDoAno;    
    $totalCigarros = $cigarrosDia * $numeroDias;
    $tempoTotalPerdidoMin = tempoPerdido * $totalCigarros;
    const diasDoAno = 365;
    const tempoPerdido = 11;

    $tempoTotalPerdidoHr = intdiv($tempoTotalPerdidoMin, 60);
    $tempoPerdidoMin = $tempoTotalPerdidoMin - (60 * intdiv($tempoTotalPerdidoMin, 60));

    $tempoTotalPerdidoDias = intdiv($tempoTotalPerdidoHr, 24);
    $tempoPerdidoHr = $tempoTotalPerdidoHr - (24 * intdiv($tempoTotalPerdidoHr, 24));

    $tempoPerdidoMeses = intdiv($tempoTotalPerdidoDias, 30);
    $tempoPerdidoDias = $tempoTotalPerdidoDias - (30 * intdiv($tempoTotalPerdidoDias, 30));

    print "Ao fumar cigarro 10 vezes por dia, durante 3 anos uma pessoa perderia aproximadamente:
    {$tempoPerdidoMeses} meses , {$tempoPerdidoDias} dias ,{$tempoPerdidoHr} horas e {$tempoPerdidoMin} minutos";