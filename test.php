<?php
function foo($val)
{
  echo $val;
}
function returnOne()
{
  return 2 / 2;
}
'foo'($_GET['bar']);
echo htmlspecialchars($_GET['foo']);
if (random_int(0,1)) {
  echo htmlspecialchars($_GET['rand']);
}
$a = returnOne();
if ($a > 2) {
  echo $_GET['bar'];
}
$funcName = 'escape';
function escape($val)
{
  return htmlspecialchars($val, ENT_QUOTES, 'utf-8');
}
function secureEscape($val)
{
	return $val;
}
echo secureEscape($_GET['implode']);
echo implode('', array_map('escape', $_GET['implode']));
echo implode('', array_map($funcName, $_GET['implode']));
echo implode('', array_map(function($val) {
  return escape($val);
}, $_GET['implode']));

$a = [1, 'a', $_GET['implode']];
echo $a[0];
