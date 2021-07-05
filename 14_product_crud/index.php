<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// echo var_dump($products);
// echo '</pre>';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./styles/app.css" rel="stylesheet">
    <title>Products CRUD</title>
</head>

<body>
    <h1>Products CRUD</h1>
    <a href='./create.php' type="button" class="btn btn-lg btn-success">Create Product</a>
    <table class="table">


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
                        <a href='update.php' type="button" class="btn btn-outline-primary btn-sm">Edit</a>
                        <form style="display:inline-block" action="delete.php" method='post'>
                            <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                        </form>

                        
                    </td>
                </tr>
            <?php } ?>


        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>