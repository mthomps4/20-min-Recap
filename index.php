<?php
require 'inc/functions.php';
$page_title = "3Wire Idea Log";

include 'views/header.php';
 ?>

  <h1><?php echo $page_title; ?></h1>
  <h3> ToDo Log </h3>

  <a href="http://localhost/20MinTest/views/addItem.php"> Add Item </a>

  <table>
    <thead>
      <tr>
        <!-- <th>Date  <span class='sortup'>[sort]</span><span class='sortd'></span></th> -->
        <th>Title  <span class='sortup'>[sort]</span><span class='sortd'></span></th>
        <th>Description  <span class='sortup'>[sort]</span><span class='sortd'></span></th>
        <th>Category  <span class='sortup'>[sort]</span><span class='sortd'></span></th>
        <th>Post Date  <span class='sortup'>[sort]</span><span class='sortd'></span></th>
        <th></th>
        <th></th>

      </tr>
    </thread>
    <?php
      $tasks = getTaskList();
      foreach($tasks as $task){
        echo "<tr>";

        echo "<td> <a href='http://localhost/20MinTest/views/details.php?id=". $task['id'] . "'>". $task['title'] . "</a></td>";
        echo "<td> <a href='http://localhost/20MinTest/views/details.php?id=". $task['id'] . "'>". $task['description'] . "</a></td>";
        echo "<td><a href='#'>". $task['category'] ."</a></td>";
        echo "<td><a href='#'>". $task['date'] ."</a></td>";
        echo "<td> Edit </td>";
        echo "<td> <a href='http://localhost/20MinTest/views/delete.php?id=". $task['id'] . "'> Delete </a></td>";

        echo "</tr>";
      }
    ?>
  </table>

  <?php
    if(isset($error_message)){
      echo "<h2>$error_message</h2>";
    }
  ?>


<?php  include 'views/header.php'; ?>
