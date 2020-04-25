# Тестовое задание от Otus - PHP Backend developer
## Install
The preferred way to install this extension is through [composer](http://getcomposer.org/download/):
```
composer require igorsa/bracket-check
```
## Usage
This package based on pure PHP. Library can check the correctness of the brackets sentence.
```php
use App\IsBalanced;

$bracketsChecker = new IsBalanced('(){}[]');

// tests

echo $bracketsChecker->isCorrect('(())'); // true
echo $bracketsChecker->isCorrect('((())'); // false
echo $bracketsChecker->isCorrect('()'); // true
echo $bracketsChecker->isCorrect('(('); // false
echo $bracketsChecker->isCorrect('())('); // false
echo $bracketsChecker->isCorrect('((())'); // false
echo $bracketsChecker->isCorrect('(())())'); //false
echo $bracketsChecker->isCorrect('(()(()))))'); // false
echo $bracketsChecker->isCorrect(')'); // false
echo $bracketsChecker->isCorrect('())(()'); // false
echo $bracketsChecker->isCorrect('(){)}((})'); // false
echo $bracketsChecker->isCorrect('(()(()))((()))'); // true
echo $bracketsChecker->isCorrect('(({})(([])))((({[]})))'); // true
```

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
