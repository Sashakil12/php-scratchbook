<?php
$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: index.php');
}
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare("SELECT * FROM products WHERE id = :id");
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);


$title = $product['title'] ?? '';
$description = $product['description'] ?? '';
$price = $product['price'] ?? '';
$date = $product['date'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];


    if (!$title) {
        $errors[] = 'Product title is required';
    };
    if (!$price) {
        $errors[] = 'Product price is required';
    };
    if (!is_dir('images')) {
        mkdir('images');
    }
    $imagePath = $product['image'] ?? '';
    if (empty($errors)) {

        $image = $_FILES['image'] ?? null;
        //delete previous image


        // var_dump($imagePath);


        if ($image && $image['tmp_name']) {
            if ($product['image']) {
                unlink($product['image']);
            }
            $imagePath = 'images/' . strval(rand(1, 1000000000)) . '/' . $image['name'];
            mkdir(dirname($imagePath));

            move_uploaded_file($image['tmp_name'], $imagePath);
        }




        $statement = $pdo->prepare("UPDATE products   SET
       title = :title, image = :image,description = :description, price = :price WHERE id = :id
    ");
        //bind values    
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);
        //execute
        $statement->execute();
        header('Location: index.php');
    }
}

?>

<?php include_once 'views/partials/header.php' ?>
    <p>
        <a href='index.php' class='btn btn-secondary'>Go back to home</a>
    </p>
    <h1>Update Product <b><?php echo $product['title'] ?? '' ?></b> </h1>

    <?php if (!empty($errors)) : ?>

        <div class="alert alert-danger">
            <?php foreach ($errors as $item) : ?>
                <div>
                    <?php echo $item ?>

                </div>
            <?php endforeach; ?>
        </div>

    <?php endif; ?>
    <form action="" method='post' enctype="multipart/form-data">
        <?php if ($product['image']) : ?>
            <img src="<?php
                        echo  $product['image'];
                        ?>" class="img-thumbnail" alt="product main image">
        <?php endif ?>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">

        </div>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="<?php echo $title ?>" class="form-control">

        </div>
        <div class="mb-3">
            <label class="form-label">Product description </label>
            <textarea type="text" name="description" class="form-control"><?php echo $description ?></textarea>

        </div>
        <div class="mb-3">
            <label class="form-label">Price </label>
            <input type="number" step="0.01" value="<?php echo $price ?>" name="price" placeholder="0.0" class="form-control">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php include_once 'views/partials/footer.php' ?>