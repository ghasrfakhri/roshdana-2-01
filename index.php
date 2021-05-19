<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>
    <?php

    $a = 10;

    $a = $a + 5;
    $a += 5;

    $a = $a + 1;
    $a += 1;
    $a++;

    $b = 0;
    //    echo ++ $b ;
    //    echo $b;


    //  var_dump(  false === false );


    //    $i = strpos('this is a test', 'is');
    //
    //    var_dump($i);
    //    if($i === false ){
    //        echo "Not found";
    //    }else{
    //        echo "found";
    //    }


    //    var_dump(4 & 5);

    //    if(  $a != 5  ){
    //        echo "dfgfdgdfgdf";
    //        echo "juyyujyujyuj";
    //    } else if ($b == 30 ){
    //        $x = 40;
    //    } else{
    //        $y = 50;
    //    }
    //
    //
    //    switch ($x){
    //        case 1:
    ////            sdfsdfsdfsdf
    //            break;
    //        case 2:
    ////            fdsfsdfsdfs
    //            break;
    //        case 4:
    //        case 5:
    ////            sdffefsfdfsddssdf
    //        default:
    ////            sgregertgerger
    //    }

    //    for ($i = 0; $i < 10; $i++) {
    //        echo $i . "<br>";
    //    }
    //    $i = 0;
    //    //
    //    while ($i < 10) {
    //        echo $i;
    //        $i++;
    //    }
    //    echo "<br>";
    //
    //    do {
    //        echo $i;
    //        $i++;
    //    } while ($i < 10)
    //

    //    $a = 10;
    //    $b = 20;
    //    $c = $a + $b;
    //    $str = " '$a + $b' = $c";
    //
    //    echo $str;
    //

    //    $a = 10;
    //    $b = 1.1;
    //    $s = "string";
    //    $t = true;
    //
    //    echo gettype($a);
    //    $a = 3.14;
    //    echo gettype($a);

    //    $ar = array(3,1,2,4,5,6);
    $ar = [5 => 3, 2, 3.14, 'name' => "Ali", [6, 7, 8, 0, 6, 5], 3, 6];

    $ar2 = [2, 5, 5 => 8, 'name' => 'ali', 6, 3, 9, 5];

    foreach ($ar2 as $i => $vv) {
        echo "$i: " . $vv . "<br>";
    }


    ?>
</h1>


</body>
</html>