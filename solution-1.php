<?php

/**
 * $str - любой емейл, для примера взял свой
 * $str1 - какая-то строка из какой-нибудь формы, в которой содержится емейл
 * $pattern - шаблон регулярного выражения для поиска емейла в строке с любым содержимым
 */
$str = "tsvetkov.dim@mail.ru";
$str1 = "name=dima&email=tsvetkov.dima@mail.ru&password=12345";
$pattern = "/[a-z0-9!#$%&'*_`{|}~]+[a-z0-9!#$%&'*_`{|}~\.=?]*@[a-z0-9_-]+[a-z0-9\._-]+/i";

// Поиск емейла в строке
$result = preg_match($pattern, $str, $email);

// Проверка емейла на валидность
if( filter_var($email[0], FILTER_VALIDATE_EMAIL) ){
	echo "email is correct!<br />";
} else {
	echo "invalid email!<br />";

	var_dump($email); # распечатка содержимого переменной в случае ошибки
}
