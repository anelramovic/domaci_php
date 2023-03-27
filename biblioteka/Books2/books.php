<?php include('scr/header.php');?>
<?php include('connection.php'); ?>


<div class="container">

    <h1>Popis Knjiga</h1>
    <div class="d-flex align-items-center justify-content-between">
        <div class="btn-group">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addBooksModal">Dodaj knjigu</button>
            <form method="GET" action="sort.php">
                <label for="sort">Sortiraj po naslovu:</label>
                <select id="sort" name="sort">
                    <option value="ASC">Uzlazno</option>
                    <option value="DESC">Silazno</option>
                </select>
                <button type="submit">Sortiraj</button>
            </form>
        </div>
        <form method="GET" action="search.php" class="form-inline">
            <div class="form-group">
                <input type="text" name="query" class="form-control mr-2" placeholder="Pretrazi po naslovu">
            </div>
            <button type="submit" class="btn btn-primary">Pretrazi</button>
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
        <?php
        $query = "select * from `books`";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Konekcija neuspjesna".mysqli_error());
        }else{
            while($row = mysqli_fetch_assoc($result)){
                ?>

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
    </table>

<?php
if(isset($_GET['insert_msg'])){
    echo "<h6>".$_GET['insert_msg']."</h6>";
}

?>
    <?php
    if(isset($_GET['delete_msg'])){
        echo "<h6>".$_GET['delete_msg'];
    }


    ?>
    <?php
//    if(isset($_GET['update_msg'])){
//        echo "<h6".$_GET['update_msg'];
//    }
//
//    ?>


<form action="add_book.php" method="post">
    <div class="modal fade" id="addBooksModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dodaj knjigu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="author" class="col-form-label">Autor:</label>
                            <input type="text" class="form-control" id="author" name="author">
                        </div>
                        <div class="mb-3">
                            <label for="naslov" class="col-form-label">Naslov:</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="broj_strana" class="col-form-label">Broj strana:</label>
                            <input type="number" class="form-control" id="pages" name="pages">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="dostupnost">
                            <label class="form-check-label" for="aveiliave">Dostupno</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-secondary" name="add_book" value="Odustani" data-dismiss="modal">
                    <input type="submit" class="btn btn-success" name="add_book" value="Dodaj knjigu">
                </div>
            </div>
        </div>
    </div>
</form>


</div>
        </div>
    </div>
</div>
<?php include ('scr/footer.php') ?>
