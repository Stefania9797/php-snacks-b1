<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$studenti = [
    [
      "nome" => "Mario",
      "cognome" => "Rossi",
      "voti" => [3,7,4,9]
    ],
    [
      "nome" => "Luigi",
      "cognome" => "Bianchi",
      "voti" => [7,7,4,5]
    ],
    [
      "nome" => "Matteo",
      "cognome" => "Verdi",
      "voti" => [6,6,8,6]
    ],
    [
        "nome" => "Luca",
        "cognome" => "Gialli",
        "voti" => [9,9,6,5]
      ],
];

for ($i=0; $i < count($studenti) ; $i++) { ?>
  <div style="padding: 10px 0;">
    <span><?= $studenti[$i]['nome']?></span>
    <span><?= $studenti[$i]['cognome']?></span>
    <p>
    <?= 'Media Voti: ' . $media = array_sum($studenti[$i]['voti'])/count($studenti[$i]['voti']) ?>
    </p>
  </div>
<?php } ?>