<?php

// recursive
function factorial(int $num): int{
    if($num !== 0){
        return $num*factorial($num - 1);
    }
    return 1;
}

print factorial(5)."\n";

// variable func
function getTriangleArea(float $base, float $height): float{
    return $base * $height / 2;
}

$name = 'getTriangleArea';
$area = $name(3,6);
print "三角形の面積は{$area}です。\n";


//higer_order
function my_array_walk(array $array, callable $func){
    foreach($array as $key => $value){
        $func($value, $key);
    }
}

function showItem($value, $key){
    print "{$key}:{$value}\n";
}

$data = ['sugiyama', 'osada', 'suginuma', 'wada', 'doi'];
my_array_walk($data, 'showItem');


$result = 0;
function sum(float $value, int $key){
		global $result;
		$result += $value;
}
$data = [100, 50, 10, 5];
$my_array_walk = my_array_walk($data, 'sum');
print "sum = {$result}\n";

//datetime diff
$dt1 = new DateTime('2016/5/15 10:58:31');
$dt2 = new DateTime('2014/12/04');
$interval = $dt1->diff($dt2, true);
print $interval->format('%Y年%M月%d日 %H時%I分%S秒 総日数%a日'."\n");

//checkdate
function calendar($year, $month){
    //1~31までの間でループ処理
    for($i = 1; $i < 32; $i++){
        //日付 $i が該当月の妥当な日である場合のみ表示
        if(checkdate($month, $i, $year)){
            if($i%5 == 0){
                print "{$i} \n";
            }else{
                print $i." ";
            }
        }else{
            print "\n";
        }
    }
}
for($i=1; $i<13; $i++){
    print "2016年 {$i} 月のカレンダー:\n";
    calendar(2016, $i);
}

//datetime create from format
$date = '2016年12月04日';
$fmt = 'Y年m月d日';
$dt = DateTime::createFromFormat($fmt, $date);
print $dt->format('Y-m-d')."\n";


//directory iterator
$dir = new DirectoryIterator('../../../');
foreach($dir as $file){
    if($file->isFile()){
        print $file->getFileName()."\n";
        print $file->getPath()."\n";
    }
}