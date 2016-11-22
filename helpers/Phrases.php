<?php
/**
 * Created by PhpStorm.
 * User: karavaev
 * Date: 24.10.16
 * Time: 6:14 AM
 */

namespace bsuir\helpers;

class Phrases {

	public static $phrases = ['group404' => 'Не могу найти твою группу.',
		                      'command404' => 'Команда не распознана.',
		                      'yes' => ['yes', 'Yes', 'Да', 'да', 'Да.', 'да.', 'yes.', 'Yes.'],
		                      'no' => ['no', 'No', 'Нет', 'нет', 'нет.', 'Нет.', 'no.', 'No.', 'Nope.'],
		                      'user404' => 'Тут такое дело' . PHP_EOL . 'Не могу найти тебя в базе :(' . PHP_EOL . 'Введи /start и пройди регистрацию ещё разок.',
		                      'get404' => 'Немного не так.' . PHP_EOL . 'Используй по примеру /get [номер дня недели 1-7] [номер недели [1-4]' . PHP_EOL . '☝ ex: /get 1 4',
		                      'groupSaved' => '👍' . PHP_EOL . "Оповещать о расписании по утрам?",
		                      'settingsSaved' => '👍' . PHP_EOL . 'Настройки сохранены.' . PHP_EOL . 'Доступные команды:' . PHP_EOL . '/today - расписание на сегодня' . PHP_EOL . '/get числовой номер дня недели [номер недели] (пример: /get 1 4) - расписание по указанному критерию' .PHP_EOL. '/about - контакты автора'
	];

	static function getPhrase($phrase){
		return self::$phrases[$phrase];
	}

}