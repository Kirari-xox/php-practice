<?php
// Q1 tic-tac問題
for ($x = 1; $x <= 100; $x++) {
  if ($x % 4 == 0 && $x % 5 == 0){
      echo 'tic-tac'."\n";
  }elseif ($x % 4 == 0) {
      echo 'tic'."\n";
  }elseif($x % 5 == 0){
      echo 'tac'."\n";
  }else {
  echo $x."\n";
  }
}


// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
//問題１
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';

//問題２
foreach($personalInfos as $number => $value){
    $number += 1;
    echo $number.'番目の'.$value['name'].'のメールアドレスは'.$value['mail'].'で、電話番号は'.$value['tel'].'です。'."\n";
}

// 問題３
$ageList = [25, 30, 18];
foreach($personalInfos as  $key => $value ){
    $personalInfos[0]['ago'] =$ageList[0];
    $personalInfos[1]['ago'] =$ageList[1];
    $personalInfos[2]['ago'] =$ageList[2];
}

var_dump($personalInfos);


// Q3 オブジェクト-1


// Q4 オブジェクト-2


// Q5 定義済みクラス
?>