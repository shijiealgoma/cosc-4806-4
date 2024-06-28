<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                <p><a href="/reminders/create">
                    Create a new reminder
                </a></p>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>
    <div class="main-content mt-3">
      <?php
        // print_r($data['reminders']);

        foreach ($data['reminders'] as $reminder){
            echo "<div class='row'>";
            echo "<div class='col-sm-auto inRow'>";
            echo "<h3>" . $reminder['subject'] . "</h3>";
            echo "<div>";
            echo "<span class='pr50' > <a href='/reminders/update/" . $reminder['id'] . "'>Update</a></span>";
            echo "<span><a href='/reminders/delete/" . $reminder['id']."'>Delete</a></span>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        
        ?>
    </div>

    

<?php require_once 'app/views/templates/footer.php' ?>
