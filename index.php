<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASYVAI</title>
</head>
<body>
    
<?php

///////////////1///////////////////
echo 'Pirma uzduotis';
echo '<br>';

$masyvas = array();

for ($i=0; $i < 30 ; $i++) { 
   $skaicius = rand(5,25);
   $masyvas[] += $skaicius;
}

var_dump($masyvas);
echo '<br>';
echo '<br>';
echo "<hr>";
///////////////2///////////////////
echo 'Antras uzduotis';
echo '<br>';
$count = 0;

for ($i=0; $i <count($masyvas) ; $i++) { 
    if($masyvas[$i] > 10) {
        $count++;
    }
}
echo $count;
echo '<br>';
echo '<br>';

$count1 = 0;
$biggest = $masyvas[0];
$index = 0;

for ($i=0; $i < count($masyvas) ; $i++) { 
    if($biggest < $masyvas[$i]) {
        $biggest = $masyvas[$i];
        $index = $i;
    }
}
echo "Didziausia skaicius yra " . $biggest . " index yra " . $index;
echo '<br>';
echo '<br>';

$arr = [];

for ($i=0; $i < count($masyvas) ; $i++) { 
    if($biggest == $masyvas[$i]) {
        $arr[] = $i;
    }
}
print_r($arr);
echo '<br>';
echo '<br>';

$sum = 0;
for ($i=0; $i < count($masyvas) ; $i+=2) { 
    $sum += $masyvas[$i];
}
echo '<br>';
echo '<br>';
echo $sum;
echo '<br>';
echo '<br>';

$arr2 = [];

for ($i=0; $i < count($masyvas) ; $i++) { 
    $arr2[] = $masyvas[$i] - $i;

}

print_r($arr2);
echo '<br>';
echo '<br>';

for ($i=0; $i < 10 ; $i++) { 
            $masyvas[] = rand(5,25);
}

print_r($masyvas);
echo '<br>';
echo '<br>';

$arr21 = [];
$arr22 = [];

for ($i=0; $i < count($masyvas) ; $i++) { 
    if($i % 2 == 0) {
        $arr21[] = $masyvas[$i];
    continue;
    }
        $arr22 [] = $masyvas[$i];
    }

print_r($arr21);
echo '<br>';
echo '<br>';
print_r($arr22);
echo '<br>';
echo '<br>';



for ($i=0; $i < count($masyvas) ; $i+=2) { 
    if($masyvas[$i] > 15) {
        $masyvas[$i] == 0;
    }
}
print_r($masyvas);
echo '<br>';
echo '<br>';

for ($i=0; $i < count($masyvas) ; $i++) { 
    if($masyvas[$i] > 10) {
        echo "pirmas didesnis uz 10 " . $i;
        break;
    }
}

echo '<br>';
echo '<br>';


for ($i=0; $i < count($masyvas) ; $i+=2) { 
    unset($masyvas[$i]);
    
}
print_r($masyvas);
echo '<br>';
echo "<hr>";

///////////////3///////////////////
echo '<br>';
echo '<br>';

$letter = [];
$ABCD = ['A' , 'B' , 'C', 'D'];
for ($i=0; $i < 200; $i++) { 
    $letter[] = $ABCD[rand(0,3)];
}

print_r($letter);
echo '<br>';
$letterCounts = [];

for ($i=0; $i < count($ABCD); $i++) { 
    $letterCounts[$ABCD[$i]] = 0;
}

for ($i=0; $i < count($letter); $i++) { 
    $letterCounts[$letter[$i]] ++;
}
echo '<br>';
print_r($letterCounts);


echo '<br>';
echo '<br>';
echo "<hr>";
///////////////4///////////////////
echo '<br>';
echo '<br>';

$length = count($letter);

for ($i=0; $i < $length; $i++) { 
    for ($a = $i+ 1; $a < $length; $a++) { 
        if($letter[$i] > $letter[$a]) {
            $tmp = $letter[$i];
            $letter[$i] = $letter[$a];
            $letter[$a] = $tmp;
        }
    }
}

print_r($letter);
echo "<hr>";
///////////////5///////////////////
echo '<br>';
echo '<br>';
$arr5 = [];
$arr6 = [];
$arr7 = [];

for ($i=0; $i < 200; $i++) { 
    $arr5[] = $ABCD[rand(0,3)];
    $arr6[] = $ABCD[rand(0,3)];
    $arr7[] = $ABCD[rand(0,3)];
}

$arr9 = [];

for ($i=0; $i < count($arr5); $i++) { 
    $arr9[] = $arr5[$i].$arr6[$i].$arr7[$i];
}

print_r($arr9);
echo '<br>';
echo '<br>';
$arrUnq = [];


for ($i=0; $i < count($arr9); $i++) { 
    $arrUnq[$arr9[$i]] = 0;
}

for ($i=0; $i < count($arr9); $i++) { 
    $arrUnq[$arr9[$i]]++;
}
echo count($arrUnq);
echo '<br>';
echo '<br>';
foreach ($arrUnq as $key => $comb) {
    if($comb == 1 ) {
        echo $key . " ";
    }
}

echo "<hr>";
///////////////6///////////////////
echo '<br>';
echo '<br>';

$arrz = range(100,999);
shuffle($arrz);
$arrz1 = array_slice($arrz, 0, 100);
print_r($arrz1);
echo '<br>';
echo '<br>';

shuffle($arrz);
$arrz2 = array_slice($arrz, 0, 100);
print_r($arrz2);
echo "<hr>";
///////////////7-8///////////////////
echo '<br>';
echo '<br>';

$arrz3 = [];
$arrz4 = [];
for ($i=0; $i < count($arrz1); $i++) { 
    if(!in_array($arrz1[$i], $arrz2)){
    $arrz3[] = $arrz1[$i];
}else {
    $arrz4[] = $arrz1[$i];
}

}print_r($arrz3);

echo "<hr>";
///////////////9///////////////////
echo '<br>';
echo '<br>';

$arrz5 = [];

for ($i=0; $i < count($arrz1); $i++) { 
    $arrz5[$arrz1[$i]] = $arrz2[$i];
}

print_r($arrz5);

echo "<hr>";
///////////////9///////////////////
echo '<br>';
echo '<br>';

$mass = [];
$mass[] = rand(5,25);
$mass[] = rand(5,25);

for ($i=2; $i < 10; $i++) { 
    $mass[] = $mass[$i-1] + $mass[$i-2];
}
print_r($mass);


echo "<hr>";
///////////////9///////////////////
echo '<br>';
echo '<br>';


$mass1 = [];

for ($i=0; $i < 101 ; $i++) {
    $rnd =  rand(0, 300);
    if(!in_array($rnd, $mass1)) {
        $mass1[] = $rnd;
    } else {
        $i--;
    }
}

sort($mass1);
print_r($mass1);
$biggest1 = $mass1[count($mass1) - 1];
$mass1 = array_slice($mass1,0,100);


$mass2 = [];
$mass2[50] = $biggest;

for ($i=0; $i < count($mass1); $i++) { 
    if($i%2 == 0) {
        $mass2[$i/2] = $mass1[$i];
    } else {
        $mass2[count($mass1) - (($i-1)/2)] = $mass1[$i];
    }
    }
ksort($mass2);
print_r($mass2);










?>

</body>
</html>