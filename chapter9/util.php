<?php
// XSS対策のためのHTMLエスケープ
  function es($data){
      // $dataが配列のとき
      if (is_array($data)){
          // 再帰呼び出し
          return array_map(__METHOD__, $data);
      } else {
          // HTML エスケープを行う
          return htmlspecialchars($data, ENT_QUOTES);
      }
  }

  function cken(array $data){
      $result = true;
      foreach ($data as $key => $value) {
          if (is_array($value)){
              // 含まれている値が配列のとき文字列に連結する
              $value = implode("", $value);
          }
          if (!mb_check_encoding($value)){
              // 文字エンコードが一致しないとき
              $result = false;
              // foreachでの走査をブレイクする
              break;
          }
      }
      return $result;
  }
?>