<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="text-align: center;">
<h1>Подробнее</h1>
 <?php 
 						$connect = mysqli_connect("127.0.0.1","mysql","mysql","myfirstbd");
 						$text_query = "SELECT * FROM more";
 						$query = mysqli_query($connect, $text_query);
 						$result = $query->fetch_assoc();
 						$result2 = $query->fetch_assoc();

                   echo "<h1>". $result2["title"] . " </h1>";
                   echo "<img style='width: 1000px' src='". $result2["img"] ."'></img>";
                  echo  "<p> ". "Автор:" .  $result2["user"] . "</p>" . "<a href='blog.php'>". "Назад" ."</a>";
                   ?>
</body>
</html>