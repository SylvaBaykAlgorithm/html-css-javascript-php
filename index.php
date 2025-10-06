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
 
<nav id=navigation>
     <div id=logoBox>
        <button onclick="redirectContentTab()" >
            <img id=logo src="content/Logo.png" alt="">
        </button>
</div> 
    <div id=links>
        <ul>
            <li><a href=""><h3>About</h3></a></li>
            <li><a href=""><h3>Get A Quote</h3></a></li>
            <li><a href=""><h3>Contact Us</h3></a></li>
        </ul>
    </div>
</nav>
    <iframe id=contentWindow src="php/aboutus.php" frameborder="0"></iframe>

    <footer>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum et animi suscipit repellendus numquam totam, sapiente recusandae. Doloremque, a, in deleniti architecto sapiente reprehenderit beatae saepe eos earum ipsa dignissimos.</h1>
    </footer>
</body>
</html>