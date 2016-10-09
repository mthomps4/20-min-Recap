
<?php
require '../inc/functions.php';
$page_title = "3Wire Idea Log";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
  $description = trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
  $notes = trim(filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING));
  $category = trim(filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING));
  $date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));

  echo "$title, $description, $notes, $category, $date!";

    if (empty($title) || empty($description) || empty($notes) || empty($category) || empty($date)){
      $error_message = 'Please fill in the required fileds...';
    }else{
      if(add_task($title, $description, $notes, $category, $date)){
        header('Location: http://localhost/CrudyTest/');
        exit;
      }else{
        $error_message='Could not add project.';
      }
    }
}


include 'header.php';
?>

<h3>Add a ToDo Item </h3>

  <form method="post" action="#">

    <label for="title"> Title</label>
    <input type="text" id="title" name="title" value="" placeholder="Title">
    <br>

    <label for="description"> Description </label>
    <input type="text" id="description" name="description" value="" placeholder="Short description here...">
    <br>

    <label for="notes"> Full Notes </label>
    <textarea id="notes" name="notes" rows="5" cols="50"></textarea>
    <!-- <input type="textarea" id="notes" name="notes" value="" placeholder="Full Notes Here..."> -->
    <br>

    <label for="category"> Category </label>
        <select id="category" name="category">
          <option value="">Select One</option>
          <option value="Web Development">Web Development</option>
          <option value="Woodworking"> Woodworking </option>
          <option value="Other"> Other </option>
        </select>
    <br>

    <label for="date"> Date </label>
    <input type="date" id="date" name="date"/>
    <br>

    <input type="submit" value="Add Item" />
  </form>


  <?php
  include 'footer.php';

  ?>
