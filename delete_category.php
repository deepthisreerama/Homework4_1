<?php
// Get category id
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// Validate the inputs
if ($category_id == null || $category_id == false) {
    $error = "Invalid category ID.";
    include('error.php');
} else {
    require_once('database.php');

    // Delete the category from database
    $query = 'DELETE FROM categories_guitar1
              WHERE categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $statement->closeCursor();

    // Display Category List page
    include('category_list.php');
}
?>