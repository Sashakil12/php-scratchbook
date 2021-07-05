<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$errors = [];
$title = '';
$description = '';
$price = '';
$date = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    if (!$title) {
        $errors[] = 'Product title is required';
    };
    if (!$price) {
        $errors[] = 'Product price is required';
    };
    if (!is_dir('images')) {
        mkdir('images');
    }
    $imagePath = "";
    if (empty($errors)) {

        $image = $_FILES['image'] ?? null;


        // var_dump($imagePath);


        if ($image && $image['tmp_name']) {
            $imagePath = 'images/' . strval(rand(1, 1000000000)) . '/' . $image['name'];
            mkdir(dirname($imagePath));

            move_uploaded_file($image['tmp_name'], $imagePath);
        }




        $statement = $pdo->prepare("INSERT INTO products ( title, image, description, price, create_date)
        VALUE (:title, :image, :description, :price, :date) 
    ");
        //bind values    
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
        //execute
        $statement->execute();
        header('Location: index.php');
    }
}


// echo '<pre>';
// echo var_dump($_POST);
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
    <title>Create new product</title>
</head>

<body>
    <h1>Create new product</h1>

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>