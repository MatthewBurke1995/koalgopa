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

function comment_sort($comments, $parent_node=NULL, $level=0) {
  //parent_node is the parentid for the first level of comments i.e. NULL
  //level correspondes to how deep the comment is within the comment tree
  //comments is the original set of comments given as a stdObject
  //
  static $sorted_comments=[];
  foreach($comments as $comment) {
    if ($comment->parentid == $parent_node) {
      $comment->level=$level;
      array_push($sorted_comments,$comment);
      comment_sort($comments, $comment->commentid, $level+1);
    }
  }
  return $sorted_comments;
}
