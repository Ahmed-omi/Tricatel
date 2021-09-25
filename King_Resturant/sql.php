<?php

$errors = array();


// récupérer les plats
$food = "
  SELECT *
  FROM food";


try{
  $pdoconn = new PDO("mysql:host=$host;dbname=$database", $user, $pwd);
  $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdoconn->query($food);

  if($stmt === false){
  die("Erreur");
  }
}

catch (PDOException $e){
  echo $e->getMessage();
}

//fonction de tri

if(isset($_POST['search'])){

  $plat = $_POST['plat'];
  $origine = $_POST['origine'];
  $regime = $_POST['regime'];

  //all champs are selected
  if(!empty($plat) AND !empty($origine) AND !empty($regime)){

    $tri = "SELECT * FROM food WHERE plat = '$plat' AND origine = '$origine' AND regime = '$regime'";

       try{
         $pdoconn = new PDO("mysql:host=$host;dbname=$database", $user, $pwd);
         $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt_tri = $pdoconn->query($tri);

         if($stmt === false){
         die("Erreur");
         }
       }

       catch (PDOException $e){
         echo $e->getMessage();
       }


  //only type is selected
  if(!empty($plat) AND empty($origine) AND empty($regime)){

    $tri = "SELECT * FROM food WHERE plat = '$plat'";

      try{
        $pdoconn = new PDO("mysql:host=$host;dbname=$database", $user, $pwd);
        $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $stmt_tri = $pdoconn->query($tri);

        if($stmt === false){
        die("Erreur");
        }
      }

      catch (PDOException $e){
        echo $e->getMessage();
      }

  //only origine is selected
  if(empty($plat) AND !empty($origine) AND empty($regime)){

    $tri = "SELECT * FROM food WHERE origine = '$origine'";

      try{
        $pdoconn = new PDO("mysql:host=$host;dbname=$database", $user, $pwd);
        $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $stmt_tri = $pdoconn->query($tri);

        if($stmt === false){
        die("Erreur");
        }
      }

      catch (PDOException $e){
        echo $e->getMessage();
      }

  //only regime is selected
  if(empty($plat) AND empty($origine) AND !empty($regime)){

    $tri = "SELECT * FROM food WHERE regime = '$regime'";

      try{
        $pdoconn = new PDO("mysql:host=$host;dbname=$database", $user, $pwd);
        $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $stmt_tri = $pdoconn->query($tri);

        if($stmt === false){
        die("Erreur");
        }
      }

      catch (PDOException $e){
        echo $e->getMessage();
      }

  //type AND origine are selected
  if(!empty($plat) AND !empty($origine) AND empty($regime)){

    $tri = "SELECT * FROM food WHERE plat = '$plat' AND origine = '$origine'";

         try{
           $pdoconn = new PDO("mysql:host=$host;dbname=$database", $user, $pwd);
           $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $stmt_tri = $pdoconn->query($tri);
          $row = $stmt_tri->fetch(PDO::FETCH_ASSOC);
          if ($row == 0){
            $errors['no_result'] = "Aucun plat ne correspond à ces critères";
          } else {$stmt_tri = $pdoconn->query($tri);}

           if($stmt === false){
           die("Erreur");
           }
         }

         catch (PDOException $e){
           echo $e->getMessage();
         }




  //type AND regime are selected
  if(!empty($plat) AND empty($origine) AND !empty($regime)){

    $tri = "SELECT * FROM food WHERE plat = '$plat' AND regime = '$regime'";

     try{
       $pdoconn = new PDO("mysql:host=$host;dbname=$database", $user, $pwd);
       $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt_tri = $pdoconn->query($tri);
      $row = $stmt_tri->fetch(PDO::FETCH_ASSOC);
      if ($row == 0){
        $errors['no_result'] = "Aucun plat ne correspond à ces critères";
      } else {$stmt_tri = $pdoconn->query($tri);}

       if($stmt === false){
       die("Erreur");
       }
     }

     catch (PDOException $e){
       echo $e->getMessage();
     }


  //origine AND regime are selected
  if(empty($plat) AND !empty($origine) AND !empty($regime)){

    $tri = "SELECT * FROM food WHERE origine = '$origine' AND $regime = '$regime'";

 try{

    $pdoconn = new PDO("mysql:host=$host;dbname=$database", $user, $pwd);
    $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $stmt_tri = $pdoconn->query($tri);
   $row = $stmt_tri->fetch(PDO::FETCH_ASSOC);
   if ($row == 0){
     $errors['no_result'] = "Aucun plat ne correspond à ces critères";
   } else {$stmt_tri = $pdoconn->query($tri);}

    if($stmt === false){
    die("Erreur");
    }
  }

  catch (PDOException $e){
    echo $e->getMessage();
  }

?>
