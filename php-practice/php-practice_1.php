<?php
// Q1 変数と文字列

$name = '「安藤」';

echo  '私の名前は' . $name . 'です。';


// Q2 四則演算

echo $num = 5 * 4;

echo $num /= 2;


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
echo $array ['東京都'],"\n",
     $array ['神奈川県'],"\n", 
     $array ['千葉県'],"\n",
     $array ['埼玉県'],"\n",
     $array ['栃木県'],"\n",
     $array ['群馬県'],"\n",
     $array ['茨城県'],"\n";


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

$array [] = '愛知県';
$array [] = '大阪府';

if ($array) {
    foreach ($array as $x => $y) {
    echo $x . 'の県庁所在地は、' . $y . 'です。'."\n";
  }
  } else {
    echo "$array は関東地方ではありません。";
  }


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>