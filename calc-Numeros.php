<?php
    session_start();

    $num1 = $_POST['num'];
    $contadorMaior = 0;
    $contadorMenor = 0;

    if(empty($num1)){
       $_SESSION['msg-error'] = "<p><font color='red'>Insira um valor qualquer</font></p>";
       header("location: index.php");
    }
    else{
        echo "<h2>Número digitado:$num1<br>";
    
        $primeiroNumEsc = $num1;
    
        echo "<h2>10 números posteriores:";
    
        while($contadorMaior <= 10){ 
            echo "<h3>$num1<br>";
            $contadorMaior += 1; 
            $num1 += 1;
        }
    
        echo "<hr>";
        echo "<h2>10 números anteriores:";
    
        while($contadorMenor <= 10){
            echo "<h3>$primeiroNumEsc<br>";
            $contadorMenor += 1;
            $primeiroNumEsc -= 1;
        }

    }
?>