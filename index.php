<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <script src="js/index.js"></script>
    <title>Home</title>
</head>
<body>
 
<nav id=navbar>
     <div id=logoBox>
        <a href="php/home.php" target="contentWindow" name="home">
            <img id=logo src="content/Logo.png" alt="">
        </a>
</div> 
    <div id=links>
        <ul>
            <li><a href="php/aboutUs.php" target="contentWindow"><h3>About Us</h3></a></li>
            <li><a href="php/getAQuote.php" target="contentWindow"><h3>Get A Quote</h3></a></li>
            <li><a href="php/contactUs.php" target="contentWindow"><h3>Contact Us</h3></a></li>
        </ul>
    </div>
</nav>
<div id=contentFrame>
    <iframe id=contentWindow name=contentWindow src="php/newQuote.php" frameborder="0"></iframe>
</div>
<div>
    <footer>
        <iframe src="php/footer.php" frameborder="0"></iframe>
    </footer>
</div>
</body>
</html>