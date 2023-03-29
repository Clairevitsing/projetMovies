<?php

// Assuming $conn is your database connection object -->
$sql = "DELETE FROM languages WHERE languageId = 4";
if ($conn->query($sql) === TRUE) {
    echo "the fourth language was deleted successfully";
} else {
    echo "Error deleting the language: " . $conn->error;
}
