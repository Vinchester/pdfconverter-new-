<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="node_modules/html2pdf.js/dist/html2pdf.bundle.min.js"></script>
</head>
<body>
    <form action="pdfcreator.php" method="POST">
        <p>Input name: <input type="text" name="name"></p>
        <input type="submit" value="Submit">
    </form>
</body>
</html>