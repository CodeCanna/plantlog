<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Log</title>
</head>
<body>
    <h1>Create Log Page</h1>
    <?php
    require_once(dirname(__DIR__, 2) . "/php/objects/Log.php");

    use Log;

    try {
        $log = new Log(
            "Beans",
            new DateTime(),
            array("image1" => "beans", "image2" => "beans"),
            "Rust",
            false,
            "Rust is notorious for not being treatable.",
            "Neem Oil, Anti-fungals",
            "None",
            false,
            false,
            0,
            "Miracle Grow",
            14.3,
            array(
                "n" => 2,
                "p" => 2,
                "k" => 2
            )
        );

        echo var_dump($log);
    } catch (Exception $e) {
        echo "OOPS";
    }
    ?>
</body>
</html>