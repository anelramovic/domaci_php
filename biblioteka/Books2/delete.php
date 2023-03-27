<?php include('connection.php'); ?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$query = "delete from `books` where `id` = '$id'";

$result = mysqli_query($connection, $query);

if(!$result){
    die("Neuspjesna konekcija".mysqli_error());

}
else{
    header('location:books.php?delete_msg="Uspjesno ste obrisali knjigu"');
}
