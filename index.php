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


// $keys = array_keys($hotels);
// echo $keys."\n";

// $firstKey = array_shift($keys);
// echo $firstKey."\n";

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

    <div>
      <?php
      // echo $hotelKeys;
      ?>
    </div>

    <div><?php foreach ($hotels as $hotel) {
            // echo $hotel; // così non funziona
            // echo "<br>";
            // echo count($hotel);
            // for ($i = 0; $i < count($hotel); $i++){
            //   // echo $hotel . "<br>";
            //   echo $hotel[$i] . "<br>";
            //   // echo $hotel[$i] . "<br>";

            // }

            // $hotelKeys = array_merge($keys, array_keys($hotel));

            foreach ($hotel as $hotelDetails => $value) {
              // $output = array_keys($hotel);
              // print_r($output);

              // foreach($output as $key => $values){
              // $key = array_keys($output);
              // print_r($key);
              // echo array_keys($key);
              // }

              // echo array_keys($hotel);
              // echo "$hotel[$hotelDetails]";
              // echo "$hotel[$hotelDetails]";
              //* stampo tutte le chiavi
              // echo $hotelDetails . "<br>";
              // echo count($hotel);
              // echo count($hotelDetails);
              // echo $hotel[$hotelDetails];


              // echo "<br>";
              for ($i = 0; $i < count($hotel); $i++) {
                // echo $hotel . "<br>";
                // echo $hotelDetails[$i];
                // echo $hotel[$hotelDetails];
                // echo $hotel[$i] . "<br>";
                // echo $hotel[$hotelDetails] . "<br>";
                // echo $hotel[count($hotel)] . "<br>";

              }

              // foreach($hotelDetails as $hotelDetail){

              // }
              //* stampo tutti i valori
              // echo "$value <br>";
              //* stampo tutte le chiavi e tutti i valori
              // echo "$hotelDetails: $value <br>";
            }
          }
          ?></div>

    <table class="table text-white">
      <thead>
        <tr>
          <th scope="col">#</th>
            <!-- <th scope="col" class="text-white"> -->
              <?php
              $hotelKeys = [];
              foreach ($hotels as $hotel) {
                foreach ($hotel as $hotelDetails => $value) {
                  if (!in_array($hotelDetails, $hotelKeys)) {
                    $hotelKeys[] = $hotelDetails;
                  }
                }
              }
              // echo "<th scope='col' class='text-white'>$hotelKeys</th>";
              foreach ($hotelKeys as $key) {
              //*STAMAPATE TUTTE LE KEY IN TABELLA
              echo "<th>$key</th>";
              // var_dump($hotelKeys);
              }
              ?>
            <!-- </th> -->
        </tr>
      </thead>
      <!-- <th scope="col">#</th>
          <th scope="col">$hotelDetails</th> -->
      <tbody>
        <!-- <tr> -->
        <?php 
          // $i = 1;
          foreach ($hotels as $hotel) {
            echo "<tr>";
            // $i+1;
            // $i++;
            // for ($i = 0; $i < count($hotel); $i++){
            //     // echo "<td>$i</td>";
            //     echo "<td>$i</td>";
            //   }
            echo "<td>#</td>";
            // echo "<td>$i</td>";
            // echo "<td>$hotels[$hotel]</td>";
            // echo "<td>";
          foreach ($hotel as $hotelDetails => $value) {
            for ($i = 0; $i < count($hotel); $i++) {
                // echo $hotel . "<br>";
                // echo $hotelDetails[$i];
                // echo $hotel[$hotelDetails];
                // echo $hotel[$i] . "<br>";
                // echo $hotel[$hotelDetails] . "<br>";
                // echo $hotel[count($hotel)] . "<br>";
                
              }
              //* stampo tutti i valori
              echo "<td>$value</td>";
              // echo $value;
            }
            // echo "</td>";
            echo "</tr>";
          }
          ?>
          <!-- <th scope="row">1</th>
          <td>$value</td> -->
        <!-- </tr> -->
      </tbody>
    </table>

  </div>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> -->


</body>

</html>