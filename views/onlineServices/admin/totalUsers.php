<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


include("header.php") ?>;
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.search-container {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

form {
    display: flex;
    align-items: center;
}

label {
    margin-right: 10px;
}

input {
    flex: 1;
    padding: 10px;
}

button {
    background-color: #3caea3;
    border: none;
    color: #fff;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #338a7d;
}

.result-container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #3caea3;
    color: #fff;
}

button.view-details {
    background-color: #3caea3;
    border: none;
    color: #fff;
    padding: 8px;
    border-radius: 4px;
    cursor: pointer;
}

button.view-details:hover {
    background-color: #338a7d;
}

</style>
    <section class="content-header">
        <h1>Search Users</h1>
    </section>

    <section class="content">
        <div class="row">

        <div class="search-container">
        <form action="" method="GET">
            <label for="search">Search by ID:</label>
            <input type="text" id="search" name="search" required>
            <button type="submit">Search</button>
        </form>
    </div>

    <div class="result-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
            include('search.php');
        }
        ?>
    </div>

        </div>

    </section>

    <?php require_once('footer.php'); ?>