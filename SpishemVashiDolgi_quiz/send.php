  
  <?php
$typeHome = $_POST['type-home'];
$typeSobs = $_POST['type-sobs'];
$typeRepair = $_POST['type-repair'];
$designProject = $_POST['design-project'];
$name = $_POST['name_input'];
$phone = $_POST['phone'];

$file = fopen("form.txt","at");
fwrite($file,"\n 'Имя:'.$name \n 'Телефон:'.$phone \n 'Общая сумма долга:'.$typeHome \n 'Есть ли имущество:'.$typeSobs \n 'Крупные сделки за 3 года:'.$typeRepair \n 'Встреча:'.$designProject \n");
fclose($file);

echo '' . $_POST['text'];

?>
