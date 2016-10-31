<!DOCTYPE html>
<html>
<head>
	<title>Домашнее задание на Строки и массивы</title>
	<style>
		
	</style>
</head>
<body>

<?php 

echo "<h1>Название континентов и животных:</h1>";

// Континеты: 4; Животных: 12;
$continents = array(
	'africa' =>
		array("Mammuthus columbi", "Loxodonta", "Panthera leo"),
	'australia' =>
		array("Macropus rufus", "Phascolarctos cinereus", "Thylacinus"),
	'america' =>
		array("Dasyprocta", "Leopardus jacobitus", "Furipterus horrens"),
	'eurasia' =>
		array("Dursus maritimus", "Mustela erminea", "Meles"),
);

$data = array(); // Обьявляем пустой массив $data

//Пройдемся по циклу foreach
foreach($continents as $continent => $animal)
{
	echo '<h2>'.ucfirst($continent).'</h2><br />';
	foreach($animal as $name)
	{
		echo $name.'<br />';
		if(strpos($name, ' '))
		{
			// Если элемент состоит из двух слов добавляем на массив $data через array_push
			for($i = 0; $i < count($name); $i++)
			{
				array_push($data, $name);
			}
		}
	}
}

echo "<br />";
echo "<hr />";

echo '<h2>Массив с элементами состоящих из двух слов:</h2>';

for($i = 0; $i < count($data); $i++)
{
	echo $data[$i].'<br />';
}

echo "<br />";
echo "<hr />";

//Случайное перемещение так попробовал!
//При обновлений страницы можно это увидеть

echo '<h2>Случайное перемещение между элементов массива и определение правильных названий!</h2>';

$x = $y = $z = array();

foreach($data as $item)
{
	list($a, $b) = explode(" ", $item);
	$x[] = $a;
    $y[] = $b;
}

shuffle($x);
shuffle($y);

foreach(array_keys($x) as $item)
{
	$z[] = $x[$item].' '.$y[$item];
}

for($i = 0; $i < count($z); $i++)
{
	if(in_array($z[$i], $data))
		echo "<b>$z[$i] - это правильное название!</b><br />";
	else echo "$z[$i]<br />";
}
	
?>

</body>
</html>
