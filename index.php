<?php 

/*echo "composer Tutorial<br/>";
require "vendor/autoload.php";

$names=[ "person"=>[
			"FirstName"=>"Savio",
			"LastName"=> "Menezes"
			]];
echo array_get($names,"person.FirstName");*/

require "vendor/autoload.php";

$userCont=new App\controllers\UserController();
echo "<br/>";
$userModel=new App\models\User();
echo "<br/>";
$fileModel=new App\models\File();
echo "<br/>";
$helper=new App\Helper();
echo "<br/>";
concat("Hello","Savio");
echo"<br/>";
new Any\class3();
echo"<br/>";
new class2();
echo"<br/>";
new class1();
 ?>