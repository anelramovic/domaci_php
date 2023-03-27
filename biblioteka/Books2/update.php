<?php include('connection.php');?>
<?php include('scr/header.php');?>
<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];

$query = "select * from `books` where `id` = '$id'";
$result = mysqli_query($connection, $query);
if (!$result){
    die("Konekcija neuspjesna" . mysqli_error());
}else {
    $row = mysqli_fetch_assoc($result);


}

}
?>
<?php

    if(isset($_POST['update_book'])){

            if(isset($_GET['id_new'])){
                $idnew = $_GET['id_new'];
            }

        $author = $_POST['author'];
        $title = $_POST['title'];
        $pages = $_POST['pages'];

        $query = "update `books` set `author` = '$author', `title` = '$title', `pages` = '$pages' where `id` = '$idnew'";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Konekcija neuspjesna".mysqli_error());
        }else{
            header('location:books.php?update_msg="Uspjesno ste uredili knjigu');
        }

    }

?>

<div class="container">
    <h1>Uredi knjigu</h1>
    <form action="update.php?id_new=<?php echo $id; ?>" method="post">
        <div class="mb-3">
            <label for="author" class="col-form-label">Autor:</label>
            <input type="text" class="form-control" id="author" name="author" value="<?php echo $row['author']; ?>">
        </div>
        <div class="mb-3">
            <label for="naslov" class="col-form-label">Naslov:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>">
        </div>
        <div class="mb-3">
            <label for="broj_strana" class="col-form-label">Broj strana:</label>
            <input type="number" class="form-control" id="pages" name="pages" value="<?php echo $row['pages']; ?>">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="dostupnost" name="available" <?php if($row['available']){echo "checked";} ?>>
            <label class="form-check-label" for="aveiliave">Dostupno</label>
        </div>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" class="btn btn-success" name="update_book" value="Uredi knjigu">
        <a href ="books.php" class="btn btn-danger">Nazad</a>

    </form>
</div>

<?php include('scr/footer.php');?>
