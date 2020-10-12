<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">;
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
</head>
	
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 

             $database = [
                    [

                     "title" => "Статья 1",
             		 "short_text" => "dolor",
                     "img" => "img/1.jpg" ,
                     "users" => "bruh",

                 ],[
                 	"title" => "Статья 2",
             		 "short_text" => "dolor",
                     "img" => "img/2.jpg" ,
                     "users" => "bruh",
                 ],[
                 	"title" => "Статья 3",
             		 "short_text" => "dolor",
                     "img" => "img/3.jpg" ,
                     "users" => "bruh",
                 ],[
                 	"title" => "Статья 4",
             		 "short_text" => "dolor",
                     "img" => "img/4.jpg" ,
                     "users" => "bruh",
                 ],[
                 	"title" => "Статья 5",
             		 "short_text" => "dolor",
                     "img" => "img/5.jpg" ,
                     "users" => "bruh",
                 ],
                ];
              $logpass = [
              	["login" => "svyyyx", "password" => "123"]
              ]
		 ?>

		 <?php
		 	$connect = mysqli_connect("127.0.0.1","mysql","mysql","myfirstbd");
		 	$text_query = "SELECT * FROM posts";
		 	$query = mysqli_query($connect, $text_query);
		 	$result = $query->fetch_assoc();
		 	$result2 = $query->fetch_assoc();
		 	$result3 = $query->fetch_assoc();
		 	$result4 = $query->fetch_assoc();
		 	$result5 = $query->fetch_assoc();
		 

		

		 ?>
	</div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h3 class="text-center">
			<?php
				$login = $_GET["login"];
				echo "Здравствуй, Господин".' '. $login;
				
			?>
		</h3>
		<h1 class="text-center">БЛОГ</h1>
		<hr>
		<div class="col-12 text-center" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
                   echo "<h1>". $result["title"] . " </h1>";
                   echo "<img class='w-100' src='". $result["img"] ."'></img";
                   echo "<p>". $result["text"] . " " .  $result["user"] . " " . "<a href='1.php'>". "More" ."</a>" ;

                   echo "<h1>". $result2["title"] . " </h1>";
                   echo "<img class='w-100' src='". $result2["img"] ."'></img";
                   echo "<p>". $result2["text"] . " " .  $result2["user"] . " " . "<a href='2.php'>". "More" ."</a>" ;

                   echo "<h1>". $result3["title"] . " </h1>";
                   echo "<img class='w-100' src='". $result3["img"] ."'></img";
                   echo "<p>". $result3["text"] . " " .  $result3["user"] . " " . "<a href='3.php'>". "More" ."</a>" ;

                   echo "<h1>". $result4["title"] . " </h1>";
                   echo "<img class='w-100' src='". $result4["img"] ."'></img";
                   echo "<p>". $result4["text"] . " " .  $result4["user"] . " " . "<a href='4.php'>". "More" ."</a>" ;
                   

                  
                
                  
			 ?>
		</div>
	</div>
</body>
</html>