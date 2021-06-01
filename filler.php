<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="gallery.js" language="JavaScript">
    </script>
    <title> Keat </title>
</head>

<body>


    <?php
    $id=$_GET['id'];
    //echo $id;
    $link=mysqli_connect( 'localhost', "root", "", "diploma");
    $query=mysqli_query($link, "
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
               ON items.id = pics.items_id where items.id =" . $id);


  //  print_r($query);


//    foreach ($query as $a){
//        echo "
//            <span id='item-name'> ". $a[ 'name'] . " </span>
//            <br>
//            <img src='" .$a[ 'pic1']. "'>
//
//             <img src='" .$a[ 'pic2']. "'>
//
//             <img src='" .$a[ 'pic3']. "'>
//            <br>
//            <span id='item-price'> ". $a[ 'price'] . " </span>
//            <br>
//            <span id='item-type'> ". $a[ 'type'] . "</span>
//            <br>
//            <span id='item-type'> ". $a[ 'size'] . "</span>
//    ";}
    ?>

     <div class="gallery-container">
    <div class="gallery-menu">
        <?php
         while ($q= mysqli_fetch_array($query)){
        echo "<img id='g1' src=".$q['pic1']." onclick='showPic(\\'pics/a1)'>";
            echo "<img id=g1 src=pics/1.jpg onclick=showPic('pics/a1')>";
                         echo "<img id=g1 src=pics/1.jpg onclick=showPic('".$q['pic1'] ."')>";

   }

        ?>

        </div>
    <div class="gallery-main">
    <img id="gm" src="pics/1.jpg" onclick="showPic('pics/a1')">
        </div>

    </div>


    </body>

</html>
