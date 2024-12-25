<?php
// Q1 変数と文字列

$name = '「安藤」';

echo  '私の名前は' . $name . 'です。';


// Q2 四則演算

$num = 5 * 4;
echo $num;

$num /= 2;
echo $num;


// Q3 日付操作

echo '現在時刻は、' . date( "Y年m月d日 H時i分s秒" ) . 'です。' ;

// Q4 条件分岐-1 if文

$device = 'mac';
if ($device == 'windows' || $device == 'mac') {
    echo "使用OSは、 $device です。" ;
} else {
    echo 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age >= 18) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列

$places = ['新潟県', '長崎県', '青森県','栃木県','千葉県'];

echo ' '.$places[3] .'と'.$places[4] .'は関東地方の都道府県です。';


// Q7 連想配列-1

$array = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];
foreach ($array as $x => $y) {
  echo $y."\n";
  }


// Q8 連想配列-2

$array = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
  ];

    foreach ($array as $x => $y) {
        if ($x == '埼玉県'){
            echo $x . 'の県庁所在地は、' . $y . 'です。';   
        }
    }


// Q9 連想配列-3

$array = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

$array ['愛知県']  = '名古屋市';
$array ['大阪府'] = '大阪市';

foreach ($array as $x => $y) {
  if ($x === '東京都' || $x === '神奈川県' || $x === '千葉県' || $x === '埼玉県' || $x === '栃木県' || $x === '群馬県' || $x === '茨城県' ) {
  echo $x . 'の県庁所在地は、' . $y . 'です。'."\n";
  } else  {
  echo  $x.'は関東地方ではありません。'."\n";
}
}

Q10
function hello($name)
{
  return $name.'さん、こんにちは。'."\n";
}

echo hello('金谷');
echo hello('安藤');


Q11
function calcTaxInPrice($price){
$taxInPrice = $price *1.1;
  return $price.'円の商品の税込価格は'.$taxInPrice.'円です。';
}

echo calcTaxInPrice (1000);


Q12
function distinguishNum($numbers){
  if($numbers % 2 == 0){
    return $numbers.'は偶数です。';
  } else {
    return $numbers.'は奇数です。';
  }
}

echo distinguishNum (11);
echo distinguishNum (24);


Q13
function evaluateGrade ($grade){
switch ($grade){
  case 'A':
  case 'B':
      return '合格です。';

  case 'C':
      return '合格ですが追加課題があります。';
      
  case 'D':
      return '不合格です。';
      
  default:
      return '判定不明です。講師に問い合わせてください。';
}
}

echo evaluateGrade ('A');
echo evaluateGrade('E');



?>