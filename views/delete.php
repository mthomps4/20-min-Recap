<?php
include '../inc/functions.php';
$page_title="delete page";


if(isset($_GET['id'])){
    list($id, $title, $description, $notes, $category, $date) = get_task(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
  }else {
    header('Location: http://www.google.com/');
  }


if(isset($_POST['id'])){
  include '../inc/connection.php';
  $id = trim(filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING));

     $sql= "DELETE FROM `crudyplayground`
          WHERE `id` = $id
          LIMIT 1";

    try{
      $results = $db->prepare($sql);
      $results->execute();
    } catch(Exception $e){
      echo "Error!: " . $e->getMessage(). "<br>";
    }
    header('Location: http://localhost/20MinTest/');
}

include 'header.php';
?>


<h4> <?php echo "$title -- $date"; ?> </h4>
<h5> <?php echo $category; ?> </h5>
<p> <?php echo $description; ?></p>
<p> <?php echo $notes; ?> </p>

<br> <br>
<p>Are you sure you want to delete this log?</p>

<form method="post" action="#">
  <input type="hidden" value="<?php echo $id; ?>" name="id" />
  <button type='submit'>Yes Delete Me</button>
</form>

<button><a href="http://localhost/20MinTest/">Hecks no, Wooops</a></button>


<?php include 'footer.php';?>
