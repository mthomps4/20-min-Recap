<?php
include '../inc/functions.php';
$page_title="details page";

// $id = $title = $description = $notes = $category = $date = '';

if(isset($_GET['id'])){
  list($id, $title, $description, $notes, $category, $date) = get_task(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
}

include 'header.php';
?>

<h1> Details Page </h1>
<h3><a href="http://localhost/CrudyTest/"> Back to List </a></h3>


<h4> <?php echo "$title -- $date"; ?> </h4>
<h5> <?php echo $category; ?> </h5>
<p> <?php echo $description; ?></p>
<p> <?php echo $notes; ?> </p>




<?php include 'footer.php';?>
