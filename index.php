<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Filip Duda - Grafik freelancer</title>
</head>
<link rel="stylesheet" href="lightbox.min.css" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
<script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
<body>
    <?php
        (empty($_GET['page'])) ? $url = "stronaglowna" : $url = $_GET['page'];

        include("nawigacja.html");
    
        switch($url){

            case "stronaglowna":
                include("stronaglowna.html");
            break;

            case "omnie":
                include("omnie.html");
            break;

            case "portfolio":
                include("portfolio.html");
            break;

            case "cennik":
                include("cennik.html");
            break;

            case "kontakt":
                include("kontakt.html");
            break;
   
        }

        include("stopka.html");
    ?>

</body>
</html>