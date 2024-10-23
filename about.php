<?php include('header.php'); ?>

<main class="main-content">
    <div class="container">
        <div class="column-left">
            <h1>About Us</h1>
            <p>Welcome to the About page. We are passionate about creating solutions that bring people together and help them achieve their goals.</p>
            <p>Here is a list of our core values:</p>
            <ul class="values-list">
                <?php
                    $values = array("Innovation", "Integrity", "Community", "Excellence", "Collaboration");
                    foreach ($values as $value) {
                        echo "<li>$value</li>";
                    }
                ?>
            </ul>
        </div>
        <div class="column-right">
            <img src="/images/03.png" alt="About Us Image" class="about-image">
        </div>
    </div>
</main>

<?php include('footer.php'); ?>

