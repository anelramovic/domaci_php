<?php include ('connection.php'); ?>
<?php include ('scr/header.php');?>
<?php
if (isset($_GET['query'])) {

    $query = "SELECT * FROM `books` WHERE `author` LIKE '%" . $_GET['query'] . "%' OR `title` LIKE '%" . $_GET['query'] . "%'";
} else {
    $query = "SELECT * FROM `books`";
}

$result = mysqli_query($connection, $query);
if(!$result){
    die("Konekcija neuspjesna".mysqli_error());
}else{
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="container">

        <h1>Popis Knjiga</h1>
        <div class="d-flex align-items-center justify-content-between">
            <div class="btn-group">
                <button class="btn btn-primary" data-toggle="modal" data-target="#addBooksModal">Dodaj knjigu</button>
                <button class="btn btn-secondary" id="sortTitleBtn">Sortiraj po naslovu</button>
            </div>
            <form method="GET" action="search.php" class="form-inline">
                <div class="form-group">
                    <input type="text" name="query" class="form-control mr-2" placeholder="Pretraži po imenu">
                </div>
                <button type="submit" class="btn btn-primary">Pretraži</button>
            </form>
        </div>

        <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Autor</th>
            <th>Naslov</th>
            <th>Broj strana</th>
            <th>Dostupno</th>
            <th>Uredi</th>
            <th>Obrisi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['author'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['pages'] ?></td>
            <td><?php echo $row['available'] ?></td>
            <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Uredi</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Obrisi</a> </td>
        </tr>
        </tbody>
        <?php
    }
}
?>
</tbody>
</table>
<?php include('scr/footer.php')?>