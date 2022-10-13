<?php

/* 
Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo.
*/

//viene dichiarato il paragrafo
$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non hic earum perspiciatis at tempora, aut facere ducimus eligendi quos voluptates error eaque quam provident fugiat dolor. Rerum fuga quibusdam quaerat. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque vel aperiam similique voluptas porro nam corrupti! Nemo eligendi eius dolorum. Sint, odit. Ipsum quibusdam facilis architecto voluptates laudantium sit animi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, nulla in corporis laborum commodi non rerum quos debitis quidem magni ipsa! Consequatur aut inventore placeat modi beatae ex minima iste!';
//viene diviso ad ogni punto 
$splitParagrafo = explode('.', $paragrafo);
var_dump($splitParagrafo)

?>

<div>
    <div>
        <h2>Prendere un lungo paragrafo:</h2>
        <p><?= $paragrafo ?></p>
    </div>
    <div>
        <h2>Prendere il paragrafo e suddividerlo in tanti paragrafi:</h2>
        <?php
        //con un ciclo vengono presi e riportati i valori
        for($i=0; $i < count($splitParagrafo); $i++){
            ?>

            <p>Paragrafo <?= $i + 1 ?>: <strong>
                <?= $splitParagrafo[$i] ?> 
            </strong></p>
            
            <?php
        }
        ?>
    </div>
</div>