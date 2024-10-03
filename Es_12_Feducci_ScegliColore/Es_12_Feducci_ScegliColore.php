<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function scegliColore($colore){
            switch($colore){
                case "y":
                    return "yellow";
                    break;
                case "g":
                    return "green";
                    break;
                case "b":
                    return "blue";
                    break;
                default:
                    return "black";
                    break;
            }
        }

        $colore = scegliColore("g");
        echo "<p style='color: $colore'>Questo paragrafo ha la proprietà color con valore $colore</p>";
    ?>
</body>
</html>