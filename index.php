<?php

declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Expense</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <script src="app.js" defer></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary p-4">
            <div class="container-fluid">
                <a class="navbar-brand fs-3" href="#">Personal Expense Manager</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="expense-content">
            <form class="expense-form">
                <h2>Add expense</h2>



                <div class="mb-3">
                    <label for="category" class="form-label">Category:</label>
                    <select
                        class="form-select form-select-lg"
                        name="category"
                        id="category">
                        <option selected disabled>--Select one category--</option>
                        <option value="food">Food</option>
                        <option value="travel">Travel</option>
                        <option value="home">Home</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" name="price" class="form-control" id="price" min="1">
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input type="number" name="quantity" class="form-control" id="quantity" min="1" value="1">
                </div>

                <p class="totalPrice">Total: $<span id="total">0</span></p>

                <button type="submit" name="newExpense" class="btn btn-dark">Create</button>
            </form>
            <div class="expense-information">
                <h2>Expense Information</h2>
                <ul>

                </ul>
            </div>
        </section>
    </main>
</body>

</html>