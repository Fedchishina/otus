<?php
namespace App;

/**
 * Класс проверки парности скобок
 */
class IsBalanced
{
	public $brackets;
	
	public function __construct(string $brackets = '') // Проверяемые скобки по умолчанию
	{
		$this->brackets = $brackets;
	}

	public function isCorrect (string $str)
	{
		$stac = []; // Стэк скобок
		$message = '';

		for ($i = 0; $i < strlen($str); $i++) { // перебираем скобки в выражении

			$idx = strpos($this->brackets, $str[$i]); // Индек скобки в шаблоне
			$idxOdd = $idx % 2 === 0; // чётный индек скобки в шаблоне
			$idxEven = $idx % 2 !== 0; // нечётный индекс скобки в шаблоне

			if ($idxOdd) {  // если индекс чётный
				$stac[] = $str[$i]; // добавляем скобку в стэк
			}

			if ($idxEven) { // если индекс не чётный (закрывающая скобка)

				if (count($stac)) { // если стэк не пустой

					$brLeft = array_pop($stac); // берём крайний символ в стэке

					if ($brLeft != $this->brackets[$idx - 1]) { // проверяем его индекс в шаблоне
						return $message = "Не парная открывающая скобка '{$brLeft}'";
					}

				} else {
					return $message = "Не парная закрывающая скобка '{$str[$i]}'";
				}
			}	

		}

		return count($stac) !== 0 ? $message = "Не парная открывающая скобка" : $message = "Все скобки парные!";
	}
}