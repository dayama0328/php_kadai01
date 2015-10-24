<?php

// 素数とはその数字でしか割り切れない数字のこと。
// 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97・・・・
// 1は表示しない
// 偶数も表示しない $i % 2 == 0
// 9,15,21,25,27,33,35,39,45,49,51,55,63,65,69,77,81,85,87,91,93,95,99を表示したくない
// 9の素数（1,3,9）3で割り切れるため9は素数ではない 9以下の数値で割り切れる数値は表示しない
// 15の素数（1,3,5,15）3,5で割り切れるため9は素数ではない
// その値以下の数値で割り切れる数値は表示しない（1以外）



for ($i = 1; $i <= 100; $i++) {
  if ( $i <= 1) { //1は表示しない
    continue;
  }
  if ( $i == 2) { //2は表示する
    echo $i."<br />";
    continue;
  }
  if ( $i % 2 == 0) { //偶数も表示しない
    continue;
  }

  $flag = 1; //1の場合0で割り切れない（余りがある） 余りがあるか否かを判定する

  for ($x = 3; $x < $i; $x++) { //1とその値以外で割り切れてはいけないことを確認するために初期値に3を与え、9以下の数値で割り切れる数があるかを確認する
    if ( $i % $x == 0) { // 9 / 3 = 0
      $flag = 0; //3で割り切れるため1を返す
    }
  }

  if ($flag == 1) { //0で割り切れなければ素数であるため表示する
   echo $i."<br />";
  }
}


?>