<?php //atverosais tags
$someNumber = 123; //integer
$someFloat = 3.14; //float
$someText = 'foo'; //strings
$someLongText = 'kasklajsdf
dsafasg
asgsdfga
asfgsfd';

$someTrue = true; //boolean
$someNothing = null; //null

$someArry = [
    'sdd',
    'das',
    true,
    123
]; //array

echo $someArry[1];

$someAssociativeArray = [
    5 => 'foo',
    6 => 'bar',
    'baz' => 'biz'
]; //Associative Array

$person = [
    'name' => 'John',
    'lastName' => 'Doe',
    'age' => '21',
];
echo $person['age'];

$someMultiDemensionalArray = [
  [
    'name' => 'John',
    'lastName' => 'Doe',
    'age' => '21',
  ],
  [
    'name' => 'Jane',
    'lastName' => 'Doe',
    'age' => '22',
  ]
];

echo $someMultiDemensionalArray[1]['lastName'];
$someMultiDemensionalArray[] = [
    'name' => 'Billy',
    'lastName' => 'Doe',
    'age' => '23',
];
// + 
// -
// /
// *
// %
// . concatination

echo 'foo' . 'foo';
echo 1 + 1; // =2
echo 1 . 1; // = 11

$num = 1;
$num++;
--$num;
$num += 2;

// ==
// !=
// <
// >
// <=
// =>

// ===
// !==

$num1 = 1;
$num2 = 2;
// is ($num1 == 1 && $num2 == 2) {

// } elseif(1 == 2) {

// } else {

// }

// switch($variable) {
//     case 'value':
//     # code...
//     break;

//     default:
//     # code...
//     break;
// }

// while(true) {

// }

// do {

// } while(false) {

// }

// for ($i=0; $i < 10; $i++)
// {
//  if ($i % 2 == 0 && $i % 3 == 0)
//    echo 'fiz';
// } elseif ($i % 2 == 0) {
//     echo 'baz';
// } elseif ($i % 3 == 0) {
//     echo 'gaz';
// } else {
//    echo $i;
// }

$foo = "RTU is amazing";
echo str_replace('RTU', 'RCS', $foo);

$string = 'zsfgsdgh';
$array = str_split($string);
$backToString = implode('', $array);
// var_dump($array);

// int (float) -> str
echo 123 . '';

// str -> int
echo intval('123aa1');
echo floatval('3.14aa1');

function addTwoNumbers(int $num1, int $num2 = 10)
{
    return $num1 + $num2;
}

echo '<br><br><br>';
echo addTwoNumbers(1, 2);
echo addTwoNumbers(1);

//$-mainigais 
 // jautajumazime> ir aizverosais, nav vajadzigs ja tiki php kodu rakstam. Viss kas ir arpus tiem tiek definets ka html. -->