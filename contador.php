<?php
    $valor= 102.75;
    
    
    $n100= $valor;
    
    if ($n100> 50 && $n100>(intval($n100/100))*100){
        $n50= $valor-(intval($n100/100))*100;
    } else {
        $n50= $n100;
    }
    
    if ($n50> 20 & $n50>(intval($n50/50))*50){
        $n20= $n50-(intval($n50/50))*50;
    } else {
        $n20=$n50;
    }
    
    if ($n20 > 10 && $n20 > (intval($n20/20))*20){
        $n10= $n20-(intval($n20/20))*20;
    } else {
        $n10= $n20;
    }
    
    if ($n10 > 5 && $n10 > (intval($n10/10))*10) {
        $n5= $n10-(intval($n10/10))*10;
    } else {
        $n5= $n10;
    }
    
    if ($n5 > 2 && (intval($n5/5))*5){
        $n2= $n5-(intval($n5/5))*5;
    } else{
        $n2= $n5;
    }
    
    if ($n2 >= 1 && (intval($n2/2))*2){
        $m1= $n2-(intval($n2/2))*2;
    } else {
        $m1= $n2;
    }

    printf("----------------------<br/>");
    printf("O valor é: $valor<br/>");
    printf("----------------------<br/>");
    printf("<br/>");
    printf ("NOTAS:<br/>");
    printf (intval($n100));
    printf (" nota(s) de R$ 100.00<br/>");
    printf (intval($n50/50));
    printf (" nota(s) de R$ 50.00<br/>");
    printf (intval($n20/20));
    printf (" nota(s) de R$ 20.00<br/>");
    printf (intval($n10/10));
    printf (" nota(s) de R$ 10.00<br/>");
    printf (intval($n5/5));
    printf (" nota(s) de R$ 5.00<br/>");
    printf (intval($n2/2));
    printf (" nota(s) de R$ 2.00<br/>");
    printf (intval($m1/1));
    printf (" moeda(s) de R$ 1.00<br/>");
    printf ("<br/>");

    if (is_float($valor)){
        
        $valor1= substr(strpbrk($valor, '.'), 1);
        
        $m50= $valor1;

        if ($m50>=25){
            $m25= $m50-50;
        } else {
            $m25= $m50;
        }
        if ($m25>= 10){
            $m10= $m25-25;
        } else {
            $m10= $m25;
        }

        if ($m10>= 5){
            $m5= $m10-10;
        } else {
            $m5= $m10;
        }

        if ($m5>= 1 && $m5 < 5) {
            $m01= $m5;
        } else {
            $m01= 0;
        }
    printf ("MOEDAS:<br/>");
    
    printf (intval($m50/50));
    printf (" moeda(s) de R$ 0.50<br/>");
    printf (intval($m25/25));
    printf (" moeda(s) de R$ 0.25<br/>");
    printf (intval($m10/10));
    printf (" moeda(s) de R$ 0.10<br/>");
    printf (intval($m5/5));
    printf (" moeda(s) de R$ 0.05<br/>");
    printf (intval($m01/1));
    printf (" moeda(s) de R$ 0.01");
    } else {
        echo "FIM!";
    }
    
?>