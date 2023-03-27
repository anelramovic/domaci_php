<?php include ('connection.php') ?>
<?php
if(isset($_POST['add_book'])){
    $author = $_POST['author'];
    $title = $_POST['title'];
    $pages = $_POST['pages'];

    if($author == "" || empty($author)){
        echo "Ovo polje mora biti popunjeno";
    }else{
       $query = "insert into `books` (`author`, `title`, `pages`) values ('$author', '$title', '$pages')";
       $result = mysqli_query($connection, $query);
       if(!$result){
           die("Query Failed". mysqli_error());
           }else{
           header('location:books.php?insert_msg=Uspjesno ste dodali knjigu!');

       }
    }
}

?>