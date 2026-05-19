<?php include_once 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Finance Tracker</title>
</head>
<body>
    <header><h1>My Budget Tracker</h1></header>

    <div class="container">
        <!-- Summary Dashboard -->
        <div class="dashboard">
            <div class="card income">Total Income: <span id="total-income">$0.00</span></div>
            <div class="card expense">Total Expenses: <span id="total-expense">$0.00</span></div>
        </div>

        <!-- Add Transaction Form -->
        <form id="transaction-form">
            <input type="text" id="desc" placeholder="Description" required>
            <input type="number" id="amount" placeholder="Amount" required>
            <button type="submit">Add Transaction</button>
        </form>

        <ul id="transaction-list">
            <!-- Transactions populated via JS -->
        </ul>
    </div>

    <script src="script.js"></script>
</body>
</html>
