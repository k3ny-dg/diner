<?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
<body>
<div class="container">
    <h1>My Diner</h1>
    <h2>Order Summary</h2>
    <h3>Thank you for your Order!</h3>

    <p>Order: <?= ($SESSION['order']->getFood()) ?> for <?= ($SESSION['order']->getMeal()) ?></p>
    <p>Condiments: <?= ($SESSION['order']->getCondiments()) ?></p>

    <a href="<?= ($BASE) ?>">Return to Home</a>
</div>
</body>
</html>