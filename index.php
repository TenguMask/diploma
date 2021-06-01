<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title> Keat </title>
</head>

<body>
    <?php $link=mysqli_connect( 'localhost', "root", "", "diploma"); $query=mysqli_query($link, "
SELECT items.id,
       items.name,
       items.size,
       items.type,
       items.price,
       items.description,
       pics.pic1,
       pics.pic2,
       pics.pic3
FROM   items
       INNER JOIN pics
               ON items.id = pics.items_id"); ?>

    <div class="flex-container">
        <?php foreach ($query as $a){ echo "
     <div class='flex-item'>
            <span id='item-name'> ". $a[ 'name'] . " </span>
            <br>
            <img src='" .$a['pic1']."'>
            <br>
            <span id='item-price'> ". $a[ 'price'] . " </span>
            <br>
            <span id='item-type'> ". $a[ 'type'] . "</span>
            <br>
            <span id='item-type'> ". $a[ 'size'] . "</span>
        </div>
    ";} ?>

        <!--
        <div class="flex-item">
            <span id="item-name"> name </span>
            <br>
            <img src="https://www.bygrantzau.com/wp-content/uploads/2020/12/mens-shirts-bershka-printed-anime-shirt-dark-blue.jpg">
            <br>
            <span id="item-price"> 19.99$ </span>
            <br>
            <span id="item-type"> shirt </span>
        </div>
-->

<!--        <div class="flex-item"> </div>-->

    </div>

</body>

</html>
