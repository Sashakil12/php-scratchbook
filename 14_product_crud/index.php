<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$search = $_GET['search']??'';

if ($search) {
    $statement = $pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC' );
    $statement->bindValue(':title', "%$search%");    
} else {
    $statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
}

$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);


// echo '<pre>';
// echo var_dump($products);
// echo '</pre>';
?>
<?php include_once 'views/partials/header.php' ?>

    <h1>Products CRUD</h1>
    <a href='./create.php' type="button" class="btn btn-lg btn-success">Create Product</a>
    <table class="table">
        <form method="get" action='index.php'>
            <div class="input-group mb-3">
                <input 
                type="text" 
                class="form-control" 
                placeholder="Search" 
                name="search"
                value="<?php echo $search; ?>"
                >
                <button type="submit" class="input-group-text">Search</button>
            </div>
        </form>



        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Create Date</th>
                <th scope="col">Act</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $i => $product) { ?>
                <tr>
                    <th scope="row"><?php echo $i + 1; ?></th>
                    <td>
                        <img src="<?php
                                    echo  $product['image'];
                                    ?>" class="img-thumbnail" alt="product main image">

                    </td>
                    <td>

                        <?php
                        echo  $product['title'];
                        ?>
                    </td>
                    <td>

                        <?php
                        echo  $product['price'];
                        ?>
                    </td>
                    <td>

                        <?php
                        echo  $product['create_date'];
                        ?>
                    </td>
                    <td>
                        <a href='update.php?id=<?php echo $product['id'] ?>' type="button" class="btn btn-outline-primary btn-sm">Edit</a>
                        <form style="display:inline-block" action="delete.php" method='post'>
                            <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                        </form>


                    </td>
                </tr>
            <?php } ?>


        </tbody>
    </table>
<?php include_once 'views/partials/footer.php' ?>