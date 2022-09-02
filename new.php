<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">'
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="/add.php" method="POST">
        <input class="input" type="text" name="title" require>
        <textarea class="input" name="body"></textarea>
        <input class="button is-primary"  type="submit" value="add">
    </form>
    </div>
</body>
</html>