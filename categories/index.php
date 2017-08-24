<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/ingvaroli/jokes/categories/worker.php'?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/ingvaroli/jokes/workers/htmlSpecialChars.php'?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manage Categories</title>
    </head>
    <body>
        <h1>Manage Categories</h1>
        <p><a href="worker.php?add">Add new category</a></p>
        <ul>
            <?php foreach ($categories as $category):?>
            <li>
                <form action="" method="post">
                <div>
                    <?php echo html($category['name']); ?>
                    <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
                    <input type="submit" name="action" value="Edit">
                    <input type="submit" name="action" value="Delete">
                </div>
                </form>
            </li>
            <?php endforeach; ?>
        </ul>
        <p><a href="..">Return to JMS home</a></p>
    </body>
</html>