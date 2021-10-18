<?php
    // Creare una variabile con un paragrafo di testo a vostra scelta.
    // Stampare a schermo il paragrafo e la sua lunghezza.
    // Una parola da censurare viene passata dall'utente tramite parametro GET.
    // Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

    $testo= "E' oggi: tutto l'ieri andò cadendo <br>
    entro dita di luce e occhi di sogno, <br>
    domani arriverà con passi verdi: <br>
    nessuno arresta il fiume dell'aurora. <br>
    
    Nessuno arresta il fiume delle tue mani, <br>
    gli occhi dei tuoi sogni, beneamata, <br>
    sei tremito del tempo che trascorre <br>
    tra luce verticale e sole cupo, <br>
    
    e il cielo chiude su te le sue ali <br>
    portandoti, traendoti alle mie braccia <br>
    con puntuale, misteriosa cortesia. <br>
    
    Per questo canto il giorno e la luna, <br>
    il mare, il tempo, tutti i pianeti, <br>
    la tua voce diurna e la tua pelle notturna.";

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>

    <style>
        body{
            padding: 100px;
        }
    </style>
</head>
<body>
    <h1>E' oggi</h1>
    <h3><em>Pablo Neruda</em></h3>
    <p><?php echo $testo ?></p>
    <h5>La poesia è lunga: <?php echo strlen($testo)?> caratteri</h5>

    <hr>


</body>
</html>