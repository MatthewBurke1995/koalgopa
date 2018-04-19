<?php

function prettydate($datetime) {
  return date('Y/m/d', strtotime($datetime));
}

function prettydatetime($datetime) {
  return date('d일 H시', strtotime($datetime));
}


function firstParagraph($string) {
  $string_list = explode("\n", $string);
  return $string_list[0];
}

function first100CJK($string) {
  preg_match('/.{95,105}\s/u', $string, $matches);
  return $matches[0] . '...';
}

  function regex_substring($string, $number) {
    $lower = 0;
    $reg = '/.{'. $lower . ',' . $number .'}/u';
    preg_match($reg, $string, $matches);
    return $matches[0] . '...';
  }

function textshortener($string) {
return substr($string, 0, 50) . '...';

}

?>
