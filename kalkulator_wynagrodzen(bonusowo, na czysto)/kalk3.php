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
    <form action="kalk4.php" method="post">
    <b>Wpisz swoją stawkę brutto:<br></b>
     
  <input type="number" name="stawka" step=".01" value="stawka">    
        
        <b><br><br>Wpisz ilość przepracowanych dni (8 godzin)<br></b>
        <input type="number" name="dni" method="post">
        
        <b><br><br>Czy masz ukończone 26 lat?<br></b>
        <input type="checkbox" name="ulga" method="post">
        
        <br><br>
        <input type="submit" name="submit" value="Wyślij">
        
    </form>
    </div>
    </body>
</html>