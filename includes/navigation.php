<?php
$sql = "SELECT * FROM categories WHERE parent = 0";
$pquery = $db->query($sql);

if (!$pquery) {
    die("Database query failed: " . $db->error);
}
?>

<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="container">
        <a href="/ecommerce/index.php" class="navbar-brand" id="text">Dlamini Store</a>
        <ul class="nav navbar-nav">
            <!--drop down menu-->
            <?php while ($parent = mysqli_fetch_assoc($pquery)): ?>
                <?php
                $parent_id = $parent['id'];
                $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
                $cquery = $db->query($sql2);

                if (!$cquery) {
                    die("Database query failed: " . $db->error);
                }
                ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text"><?php echo $parent['category']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php while ($child = mysqli_fetch_assoc($cquery)): ?>
                            <li><a href="#"><?php echo $child['category'] ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</nav>
