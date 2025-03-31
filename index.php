<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Expense</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <main class="manager">
        <section>
            <form action="" method="post">
                <div>
                    <label for="service">Service:</label>
                    <input type="text" name="service" id="service" placeholder="Enter the service">
                </div>
                <div>
                    <label for="expense">Expense: </label>
                    <input type="number" min="1" name="expense" id="expense">
                </div>
                <div>
                    <label for="quantity">Quantity</label>
                    <input type="number" min="1" name="quantity" id="quantity">
                </div>
                <button type="submit">Add</button>
            </form>
        </section>
        <section>Segundo bloque</section>
    </main>
</body>
</html>