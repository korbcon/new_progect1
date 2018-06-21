<html>
<head>
    <title>Домашка 2</title>
</head>
<body>
<h3>Определение пола по имени</h3>
<?php
$a='Мадама';//имя
function sexid ($a)
{
    if (((substr($a, -2) == 'б') or (substr($a, -2) == 'в') or (substr($a, -2) == 'г')or (substr($a, -2) == 'д')
        or (substr($a, -2) == 'ж') or (substr($a, -2) == 'з')or (substr($a, -2) == 'к')or (substr($a, -2) == 'л')
        or (substr($a, -2) == 'м')or (substr($a, -2) == 'н')or (substr($a, -2) == 'п')or (substr($a, -2) == 'р')
        or (substr($a, -2) == 'с')or (substr($a, -2) == 'т')or (substr($a, -2) == 'ф')or (substr($a, -2) == 'х')
        or (substr($a, -2) == 'ц')or (substr($a, -2) == 'ч')or (substr($a, -2) == 'ш')or (substr($a, -2) == 'щ')
        or ($a == 'Никита') or ($a == 'Савва') or ($a == 'Илья'))){
        return '-мужчина';}
        else {
        return null;}
}
echo $a,' ', sexid ($a);
assert( '-мужчина' == sexid('Аделаида'));
var_dump (assert( '-мужчина' == sexid('Аделаида')));
?>
</body>
</html>