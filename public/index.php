<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Heroku Demo</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Heroku Demo">
</head>
<body>
    <header>
        <h1>Heroku Demo</h1>
    </header>

    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>

    <article>
        <h2>This is a headline</h2>
        <p>
            <?php
                echo 'Hello PHP World!';
            ?>
        </p>
        <p>
            <em>
                <?php
                echo '.env ' . getenv('SOMEVARIABLE');
                ?>
            </em>
        </p>
         <p>
            This is some text. This is some text.
            This is some text. This is some text.
            This is some text. This is some text.
        </p>
    </article>

    <footer>
        Made with <a href="https://html5example.com">html5example.com</a>
    </footer>
</body>
</html>
