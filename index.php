<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title> Keat </title>
</head>

<body>
    <?php $link=mysqli_connect( 'localhost', "root", "", "diploma");
    $query=mysqli_query($link, "
SELECT items.id,
       items.name,
       items.price,
       items.description,
       pics.pic1,
       pics.pic2,
       pics.pic3
FROM   items
       INNER JOIN pics
               ON items.id = pics.items_id");
    foreach ($query as $a){ echo $a[ 'id'] . " " . $a[ 'name'] . " " . $a[ 'price'] . " " . $a[ 'price'] . " " . $a[ 'pic1']. "<br>"; } ?>

    <div class="flex-container">
        <div class="flex-item"> </div>
         <div class="flex-item"> </div>
         <div class="flex-item"> </div>
    </div>

    </body>

</html>
