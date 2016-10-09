<?php
  function getTaskList($filter = null){
    include 'connection.php';

    try{
      return $db->query('SELECT * FROM crudyplayground');
    }catch(Exception $e){
      echo "Error: " . $e->getMessage() . "<br>";
      return array();
    }
  }


  function add_task($title, $description, $notes, $category, $date){
    include 'connection.php';

    $sql = 'INSERT INTO `crudyplayground` (`title`, `description`, `notes`, `category`, `date`) VALUES(?, ?, ?, ?, ?)';

    try {
      $results = $db->prepare($sql);

      $results->bindValue(1, $title, PDO::PARAM_STR);
      $results->bindValue(2, $description, PDO::PARAM_STR);
      $results->bindValue(3, $notes, PDO::PARAM_STR);
      $results->bindValue(4, $category, PDO::PARAM_STR);
      $results->bindValue(5, $date, PDO::PARAM_STR);

      $results->execute();
    } catch (Exception $e) {
      echo "Error!: " . $e->getMessage() . "<br>";
      return false;
    }
    return true;
  }

  function get_task($id){
    //Get and set ThisTask
    include 'connection.php';
      $sql = 'SELECT `id`, `title`,`description`,`notes`,`category`,`date` FROM `crudyplayground` WHERE `id` = ?';

      try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $id, PDO::PARAM_INT);
        $results->execute();
      } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br>";
        return false;
      }
      return $results->fetch();
    }


?>
