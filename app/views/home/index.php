<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Hey</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>
    <div class="main-content mt-3">
        <h2 class="main-title">Welcome to the COSC 4806 website</h2>
        <p>Let me show you some interesting content.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nisl odio. Mauris vehicula at nunc id posuere. Praesent sit amet massa nec quam pharetra pretium. Sed vehicula ac lacus nec faucibus. Integer dictum semper lacus a rhoncus.</p>
        <p>Suspendisse potenti. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.</p>
    </div>

    <div class="row">
        <div class="col-lg-12 mt-5">
            <p> <a href="/logout">Click here to logout</a></p>
        </div>
    </div>

    
</div>
    <?php require_once 'app/views/templates/footer.php' ?>
