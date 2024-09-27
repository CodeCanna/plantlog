<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Log</title>
    <link rel="stylesheet" href="/css/mvp.css" />
    <link rel="stylesheet" href="/css/index.css" />
</head>

<body>
    <?php
    require_once("php/objects/Log.php");
    require_once("php/objects/Problems.php");
    require_once("php/objects/Notes.php");
    ?>
    <nav>
        <ul>
            <li id="home-nav" onclick="loadHome()">
                <a href="#">Home</a>
            </li>
            <li id="newlog-nav" onclick="loadNewLogForm()">
                <a href="#">New Log</a>
            </li>
        </ul>
    </nav>
    <main id="display">
        <?php echo "Hello, World!"; ?>
    </main>
    <footer style="text-align: center;">
        <a href="#">Edit</a><a href="#">Search</a><a href="#">Delete</a>
    </footer>
    <script src="/js/index.js"></script>
</body>

</html>