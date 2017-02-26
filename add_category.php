<?php
// Get category data
$name = filter_input(INPUT_POST, 'name');

// Validate the inputs
if ($name == null) {
    $error = "Invalid category data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the category to database  
    $query = 'INSERT INTO categories_guitar1 (categoryName)
              VALUES (:category_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_name', $name);
    $statement->execute();
    $statement->closeCursor();

    // Displays the Category List page
    include('category_list.php');
}
?>