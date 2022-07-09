
 
<?php

// $a = '128'; //присвоюємо a = 128
// $b = 'a'; //присвоюємо b = ‘a’
// $c = 128; //присвоюємо c = 128
// echo $$b+$c; //який результат?


// $myWorld = 'rr';
// echo $myWorld[0];


// $myArray = array(1,2,'dsds',True);
// print_r($myArray);


// $arrayIndex = 10;
// $myArray[$arrayIndex] = "“Some value”";
// echo $myArray[10];

// $yourArray[] = 10;
// $yourArray[] = 20;
// $yourArray[] = 30;
// $yourArray[15] = 40;
// $yourArray[] = 50;
// print_r($yourArray);

// $yourArray = array(    
// 	1    => "a", 
// 	"1"  => "b",   
//  	3  => "c",    
// 	false => "d"
// );

// var_dump($yourArray);

// foreach($yourArray as $key=>$value)
// {
//     echo $key;
//     echo $value;
// }

// $arr = array(1, 2, 3, 4, 5, 6);

// foreach ($arr as $val) {
// echo $val;
// }



// $newArray = array();
// $newArray = range(1,100);

// foreach ($newArray as $val) {
// echo $val;
// }


// $twoArray = array(

//         '1' => [
//             'number' => '1',
//             'name' => 'Ivan',
//             'age' => '18'
//         ],
//         '2' => [
//             'number' => '4',
//             'name' => 'Vasyl',
//                 'age' => '25'
//             ],

// );

// foreach($twoArray as $key=>$items){
//     echo ('<table><tr><td>'.$key.'</td></tr>');
//     foreach($items as $key=>$item){
//         echo ('<tr><td>'.$key.'</td><td>'.$item.'</td></tr></table>');
//     }

// }


// $a = 10;
// $myArr = array(    
//  	"Google" => "google.com.ua'",  
//  	"Yandex" => "yandex.ru",   
// 	"Rambler" => "rambler.ru",   
//  	"mailServices" => array("ukr.net","mail.ru","gmail.com")
//     );
// foreach ($myArr as $key => $value)
// {
//     $extValue = $value;
//     if (gettype($extValue) == 'array')
//     {
//         $extValue = implode($value);
//     }

//     echo $key." = ".$extValue."\n";
// }

// $array = array(1,1,1,2,2,2,3,3);
//     foreach ($array as $key=>$item)
//     {
//         switch($item){
//             case($item == 1);
//             case($item == 2);
//             case($item == 3);
//             echo $item;

//         }
//     }

// // число
// $number = "1547";

// // сюда будем записывать сумму
// $sum = 0;

// // получаем сумму цифр числа
// // доступ к каждой цифре числа можно получить через оператор доступа элементов массива
// for ($i = 0; $i < strlen($number); $i++) {
//     $sum += $number[$i];
// }

// выводим данные
// echo "Число: {$number}\n";
// echo "Сумма: {$sum}";

// $i = 1;
// while ($i < 10){
// echo (++$i)."\n"; //Попробуем написать ++$i
// }

	// $value = ['Hello world!'];
	// echo is_array($value); // false

	// $value = array(1,2,3,4,5);
	// echo is_array($value); // true

    // $array = array('Ruby', 'Python', 'PHP', 'ASP.NET', 'PHP');
    // while($lang = current($array)) {
    //     if ($lang == 'PHP') {
    //         echo key($array); // 1
    //     }
    //     next($array);
    // }


    // $array = array('Ruby', 'Python', 'PHP');
	// array_push($array, 'ASP.NET', ['C', 'C++']);
	// var_export($array);
	// var_export(array_pop($array));

    // $array = array('Ruby', 'Python', 'PHP', 'ASP.NET');
    // var_dump(array_map('filter', $array));
	// function filter($el) {
	// 	if ($el == 'PHP') {
	// 		return 'I like ' . $el;
	// 	}
	// 	return $el;

	// }

//     $info = array('кофе', 'коричневый', 'кофеин');

// // Составить список всех переменных
//     list($drink, $color, $power) = $info;
//     echo "$drink - $color, а $power делает его особенным.\n";

//     // Составить список только некоторых из них
//     list($drink, , $power) = $info;
//     echo "В $drink есть $power.\n";

//     // Или пропустить все, кроме третьей
//     list( , , $power) = $info;
//     echo "Мне нужен $power!\n";

//     // list() не работает со строками
//     list($bar) = "abcde";
//     var_dump($bar); // NULL

// $arr = ['a', 'b', 'c', 'd', 'e'];
// $arr = array_map('strtoupper', $arr);
// var_dump($arr);

// $arr = [];

// for ($i = 1; $i <= 30; $i++) {  
//     $arr[]$i = ;
// }
// var_dump($arr);

// $a = sqrt(587);
// $f = floor($a);
// $c = ceil($a);
// $arr = array("floor"=>"$f", "ceil"=>"$c");
// echo $arr["floor"];

// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $sum = [];
// foreach ($arr as $elem) {
//     if (array_sum($sum) == 10 || (array_sum($sum) > 10)) {
//         echo 'Что бы сумма получилась 10, понадобилось ' . count($sum) . ' первых элемента';
//         return;
//     } else {
//         array_push($sum, $elem);
//     }
// }

// $email  = 'nameexample.com';
// $domain = strstr($email, '@');
// echo $domain; // выводит @example.com

// $user = strstr($email, '@', true); // Начиная с PHP 5.3.0
// echo $user; // выводит name
// $mystring = 'aaaabc';
// $findme   = 'aaaab';
// $pos = strpos($mystring, $findme);
// /* Заметьте, что используется ===.  Использование == не даст верного результата, так как 'a' находится в нулевой позиции.*/
// if ($pos === false) {   
// 	 echo "Строка '$findme' не найдена в строке'$mystring'";
// } else {
//     echo "Строка '$findme' найдена в строке '$mystring'";
// }   
// echo " в позиции $pos";
// $text = 'This is a test';
// echo strlen($text).'<br>'; // 14

// echo substr_count($text, 'is').'<br>'; // 2

// // строка уменьшается до 's is a test', поэтому вывод будет 1
// echo substr_count($text, 'is', 3).'<br>';

// // текст уменьшается до 's i', поэтому вывод будет 0
// echo substr_count($text, 'is', 3, 3).'<br>';

// // генерирует предупреждение, так как  5+10 > 14
// // echo substr_count($text, 'is', 5, 10);


// // выводит только 1, т.к. перекрывающиеся подстроки не учитываются
// $text2 = 'gcdgcdgcd';
// echo substr_count($text2, 'gcdgcd');

// $str = 'london is the capital of great britain';
// echo ucwords($str);


// $password = 'dfsывывыыывввыв';
// if (strlen($password) < 5)
// 	echo "Пароль слишком короткий, минимум 5 символов";
// elseif (strlen($password) > 10)
// 	echo "Пароль слишком длинный, максимум 10 символов";
// else
// 	echo "Пароль подходит";
// // 2 
// echo '<br>';
// if (strlen($password) < 5 && strlen($password) > 10)
// 	echo "Пароль подходит";
// else
// 	echo "Придумайте другой пароль(мин-5, макс 10 символов)";

// $datetime = time();

// strtotime($datetime, $datetime);


// echo strtotime("now");
// echo strtotime("1 January 1970");
// $date = date_create('1995-07-02');
// $date1 = date_create('1995-07-02');
// $d = date_modify($date, $date1);
// echo date_format($d, 'd.m.Y');
$arr = [1, 2, 3, -1, -2, -3];
function isPositive($n){return $n >= 0;}

$res = [];

foreach($arr as $v){
	if(isPositive($v)){
		$res[] = $v;
	} 
}
	
var_dump($res);
?>
