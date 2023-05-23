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
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <title>php-hotel</title>
</head>
<body>
     
     <div class="m-4">

          <div class="mb-4">
               <h4>Filtri:</h4>
               <form action="index.php" method="GET">
                    <label for="">Parcheggio</label>
                    <select name="parcheggio" id="">
                         <option value="">-- Scegli --</option>
                         <option value="1">Con parcheggio</option>
                         <option value="0">Senza parcheggio</option>
                    </select>

                    <div>
                         <label for="">Voto</label>
                         <select name="voto" id="">
                              <option value=""></option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                         </select>
                    </div>

                    <button class="d-block mt-3" type="submit">Cerca</button>
               </form>
          </div>
         


          <div>

               <table class="table">
                    <thead>
                         <tr>
                              <th scope="col">Name</th>
                              <th scope="col">Description</th>
                              <th scope="col">Parking</th>
                              <th scope="col">Vote</th>
                              <th scope="col">Distance to center</th>
                         </tr>
                    </thead>
                    <tbody>
                         

               <?php
          
                    if($_GET['parcheggio'] == ''){

                         foreach($hotels as $element){
                              if ($element['parking'] == true) {
                                   echo "<tr>" . "<td>" . $element['name'] . "</td>" .
                                   "<td>" . $element['description'] . "</td>" . 
                                   "<td>" . 'Yes' . "</td>" . 
                                   "<td>" . $element['vote'] . "</td>" . 
                                   "<td>" . $element['distance_to_center'] . "</td>" . "</tr>";
                              }else{
                                   echo "<tr>" . "<td>" . $element['name'] . "</td>" .
                                   "<td>" . $element['description'] . "</td>" . 
                                   "<td>" . 'No' . "</td>" . 
                                   "<td>" . $element['vote'] . "</td>" . 
                                   "<td>" . $element['distance_to_center'] . "</td>" . "</tr>";
                              };
                         }
                    }

                    else if($_GET['parcheggio'] == '1'){

                         foreach($hotels as $element){
                              if(in_array($element['parking'] == true, $hotels)){
                                   echo "<tr>" . "<td>" . $element['name'] . "</td>" .
                                   "<td>" . $element['description'] . "</td>" .
                                   "<td>" . 'Yes' . "</td>" .
                                   "<td>" . $element['vote'] . "</td>" .
                                   "<td>" . $element['distance_to_center'] . "</td>";
                              }
                         }
                    }

                    else if($_GET['parcheggio'] == '0'){

                         foreach($hotels as $element){
                              if (in_array($element['parking'] == false, $hotels)) {
                                   echo "<tr>" . "<td>" . $element['name'] . "</td>" .
                                   "<td>" . $element['description'] . "</td>" . 
                                   "<td>" . 'No' . "</td>" . 
                                   "<td>" . $element['vote'] . "</td>" . 
                                   "<td>" . $element['distance_to_center'] . "</td>" . "</tr>";   
                              };
                         }
                    }

               ?>
                    </tbody>
               </table>
          </div>
     
     </div>

</body>
</html>