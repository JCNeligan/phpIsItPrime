<?php
error_reporting(0);
if (is_numeric($_GET["number"]) && $_GET["number"] > 0 && $_GET["number"] == round($_GET["number"], 0)) {
    $i = 2;
    $isPrime = true;

    while ($i < $_GET["number"]) {
        if ($_GET["number"] % $i == 0) {
            $isPrime = false;
        }
        $i++;
    }

    if ($isPrime) {
        $response = "<p>$i is a prime number!</p>";
    } else {
        $response = "<p>$i is not prime.</p>";
    }
} else if ($_GET) {
    $response = "<p>Please enter a positive whole number</p>";
}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Is It Prime?</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.typekit.net/eok0vua.css">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>

    <body>
        <header>
            <h1>Is It Prime?</h1>
        </header>
        <section class="main">
            <p>Please enter a whole number to see if it is prime.</p>
            <form>
                <input name="number" type="number" />
                <input type="submit" value="Go!" />
            </form>
            <div>
                <p id="user-number">
                    <?php echo $i;?>
                </p>
                <?php echo $response; ?>
            </div>
        </section>
    </body>

    </html>