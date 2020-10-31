<!DOCTYPE html>
    <?php
      $movies = array("musicals" => array( 0 => "Oklahoma" , 1 => "The Music Man" , 2 => "South Pacific"),

                    "dramas" => array(0 => "Lawrence of Arabia" , 1 => "To Kill a Mockingbird " , 2 => "Casablanca"),

                    "mysteries" => array(0 => " The Maltese Falcon" , 1 => "Rear Window" , 2 => "North by Northwest"));
      $items = array_keys($movies);
      for($i=0 ; $i<count($movies); $i++){
          echo strtoupper($items[$i])."<br/>";      
          foreach($movies[$items[$i]] as $newItems => $value){
              echo "----> ".$newItems." = ".$value."<br/>";
          }
      }
         echo "<h1>-----------------------------------</h1>";
    krsort($movies);
    
    $items = array_keys($movies);
    
      for($i=0 ; $i<count($movies); $i++){
          echo strtoupper($items[$i])."<br/>";
          krsort($movies[$items[$i]]);
          foreach($movies[$items[$i]] as $newItems => $value){
           
              echo "---> ".$newItems." = ".$value."<br/>";
          }
      }
      ?>
