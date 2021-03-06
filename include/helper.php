<?php

function mt_shuffle(Array &$a)
{
  $p = function($p, $q)
    { return mt_rand() - (mt_getrandmax() >> 1); };
  return usort($a, $p);
}

function to_array(& $x)
{
  $tmp = [];
  foreach($x as $k => $v)
    $tmp[$k] = $v;
  $x = $tmp;
}

function array_transform($a, $f)
{
  $n = 0;
  $r = [];
  
  foreach($a as $v)
    $r[$n++] = $f($v);
  
  return $r;
}

