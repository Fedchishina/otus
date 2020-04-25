<?php

require "vendor/autoload.php";

use App\IsBalanced;

$bracketsChecker = new IsBalanced('(){}[]');


echo $bracketsChecker->isCorrect('(())'), ' - должно быть true', "<br>"; // true
echo $bracketsChecker->isCorrect('((())'), ' - должно быть false', "<br>"; // false
echo $bracketsChecker->isCorrect('()'), ' - должно быть true', "<br>";
echo $bracketsChecker->isCorrect('(('), ' - должно быть false', "<br>";
echo $bracketsChecker->isCorrect('())('), ' - должно быть false', "<br>";
echo $bracketsChecker->isCorrect('((())'), ' - должно быть false', "<br>";
echo $bracketsChecker->isCorrect('(())())'), ' - должно быть false', "<br>"; //false
echo $bracketsChecker->isCorrect('(()(()))))'), ' - должно быть false', "<br>";
echo $bracketsChecker->isCorrect(')'), ' - должно быть false', "<br>";
echo $bracketsChecker->isCorrect('())(()'), ' - должно быть false', "<br>";
echo $bracketsChecker->isCorrect('(){)}((})'), ' - должно быть false', "<br>";
echo $bracketsChecker->isCorrect('(()(()))((()))'), ' - должно быть true', "<br>";
echo $bracketsChecker->isCorrect('(({})(([])))((({[]})))'), ' - должно быть true', "<br>";

