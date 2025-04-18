<?php
#disinin kalian bisa melakukan penghapusan data ke database
#kalian bisa menghapus data ke database dengan menggunakan form yang sudah disediakan seperti di file create.php tadi
include 'config.php';
include 'functions.php';

$id = $_GET['id'];

if (deleteUser($conn, $id)) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}
?>
