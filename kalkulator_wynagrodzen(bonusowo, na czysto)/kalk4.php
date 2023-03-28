<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kalkulator wynagrodzeń</title>
    <style>
        .ramka{background-color:#b9bad0;
        width:30%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 15%;
        border-radius:10px;
        text-align: center;
        font-size: 20px;}
    
    </style>
    
    </head>
<body> 
    <div class="ramka">
<?php
   
    
$stawka=$_POST['stawka'];
$dni=$_POST['dni'];
$mnoznik=0;
@$ulga=$_POST['ulga'];
    
    if($dni>31)
        echo'Nie ma tylu dni w miesiącu.';
    else {
        echo"Przepracowane dni: ".$dni;  
        $mnoznik=$stawka*8;
}        
        
  $wyplata=round($mnoznik*$dni,2); 

if (!empty($ulga)) {
    $wyplata=round($wyplata*0.88,2);
    echo'<br>Twoja wypłata po odliczeniu podatku 12% powinna wynosić '.$wyplata.' PLN.';
}
else
    echo'<br>Brutto = netto. Twoja wypłata powinna wynosić '.$wyplata. ' PLN.';
    ?>
        </div>
</body>
</html>    