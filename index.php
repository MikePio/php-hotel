<?php

$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];

//! esempi vari (uso personale)
//* tutte le key
// $keys = array_keys($hotels);
// echo $keys."\n";

//* prima key
// $firstKey = array_shift($keys);
// echo $firstKey."\n";

//* ultima key
// $lastKey = array_pop($keys);
// echo $lastKey."\n";

// $output = array_keys($hotels);
// print_r($output);

//*FUNZIONA
// $hotelKeys = [];

// foreach ($hotels as $hotel) {
//   foreach ($hotel as $hotelDetails => $value) {
//     if (!in_array($hotelDetails, $hotelKeys)) {
//       $hotelKeys[] = $hotelDetails;
//     }
//   }
// }

// var_dump($hotelKeys);

//*FUNZIONA
// $hotelKeys = [];

// foreach ($hotels as $hotel) {
//   $hotelKeys = array_merge($hotelKeys, array_keys($hotel));

// }
// ogni elemento di un array viene inserito una sola volta nell'array
// $hotelKeys = array_unique($hotelKeys);

// var_dump($hotelKeys);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">   -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <title>PHP HOTEL</title>
</head>

<body class="bg-dark text-white">

  <div class="container p-5">

    <h1>PHP Hotel</h1>

    <table class="table text-white">
      <thead>
        <tr>
          <th scope="col">#</th>
          <?php
          $hotelKeys = [];
          foreach ($hotels as $hotel) {
            foreach ($hotel as $hotelDetails => $value) {
              //* Controlla se esiste un valore in un array
              if (!in_array($hotelDetails, $hotelKeys)) {
                $hotelKeys[] = $hotelDetails;
              }
            }
          }
          foreach ($hotelKeys as $key) {
            //*STAMAPATE TUTTE LE KEY IN TABELLA
            echo "<th>$key</th>";
          }
          ?>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($hotels as $hotel) {
          echo "<tr>";
          echo "<td>#</td>";
          foreach ($hotel as $hotelDetails => $value) {
            //* stampo tutti i valori
            // echo "<td>$value</td>";
            //* 1 sta per true
            // if ($hotelDetails == 'parking' && $value == true) {
            if ($hotelDetails == 'parking' && $value == 1) {
              echo "<td>Sì</td>";
              //* 0 sta per false
              // } else if ($hotelDetails == 'parking' && $value == false) {
            } else if ($hotelDetails == 'parking' && $value == 0) {
              echo "<td>No</td>";
            } else {
              echo "<td>$value</td>";
            }
          }
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>

    <!-- //*table stampata con un solo forEach -->
    <h1>Table con un solo forEach</h1>

    <div>
      <table class="table text-white">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Voto</th>
            <th scope="col">Distanza dal centro</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($hotels as $hotel) : ?>
            <tr>
              <th scope="row"><?php echo $hotel['name'] ?></th>
              <td><?php echo $hotel['description'] ?></td>
              <td><?php echo ($hotel['parking']) ? 'Si' : 'No' ?></td>
              <td><?php echo $hotel['vote'] ?></td>
              <td><?php echo $hotel['distance_to_center'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>


  </div>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>