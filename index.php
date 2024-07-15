<?php
require_once 'core/int.php'; // Ensure the correct file path
$sql = "SELECT * FROM tbl_products WHERE featured = 1";
$featured = $db->query($sql);

if (!$featured) {
    die("Database query failed: " . $db->error);
}
?>
<!-- HEAD.PHP  <!DOCTYPE html>
<html>
<head>
    <title>Dlamini</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>-->


<!-- NAVIGATION -->


<!-- HEADERFULL.PHP Insert <div id="background-image">
    <div id="image-1"></div>
    <div id="image-2"></div>
</div>image -->


<!-- Remove the spaces and center the products -->
<div class="col-md-2"></div> <!-- Added closing div tag -->

<!-- Main content of featured products -->
<div class="col-md-8">
    <div class="row">
        <h2 class="text-center">Featured Products</h2>

        <?php while ($tbl_product = mysqli_fetch_assoc($featured)): ?>
        <div class="col-md-3">
            <h4><?php echo htmlspecialchars($tbl_product['title']); ?></h4> <!-- Assuming title is the column name -->
            <img src="<?php echo htmlspecialchars($tbl_product['image']); ?>" alt="<?php echo htmlspecialchars($tbl_product['title']); ?>" id="image" />
            <p class="list-price text-danger">List price: <s>$<?php echo htmlspecialchars($tbl_product['list_price']); ?></s></p>
            <p class="price">Our price: $<?php echo htmlspecialchars($tbl_product['price']); ?></p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-<?php echo htmlspecialchars($tbl_product['id']); ?>">Details</button>
        </div>
        <?php endwhile; ?>
    </div>
</div>

<!--FOOTER-->


<?php
include 'details-model-levis-jeans.php';
include 'details-model-football.php';
include 'details-model-watch.php';
include 'details-model-purse.php';
include 'details-model-hoodie.php';
include 'details-model-joggers.php';
include 'details-model-headband.php';
include 'details-model-poloshirt.php';
?>

</body>
</html>
