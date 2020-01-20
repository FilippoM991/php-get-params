<?php
    $frase = "Lorem bla ipsum bla bla dolor bla sit amet bla bla,";
    echo "<pre>";
    var_dump($frase);
    echo "</pre>";
    $da_censura = $_GET["badword"];
    $rimedio = "***";
    $frase_censurata = str_replace($da_censura, $rimedio, $frase);
    echo "<pre>";
    var_dump($frase_censurata);
    echo "</pre>";

    // prove
    $posizione = strrpos($frase_censurata, "z");
     var_dump($posizione);
     if ($posizione === false) {
        echo "La stringa non è stat trovata";
    } else {
        echo "La stringa è stat trovata";
    }

 ?>
 <pre>
     <?php echo strlen($frase_censurata) ?>
 </pre>
