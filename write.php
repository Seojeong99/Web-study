<?php
 require("config/config.php");
 require("lib/db.php");
 $conn=db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
 $result=mysqli_query($conn, 'SELECT *FROM topic');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>

<body id='target'>

	<header>
		<img src="https://search.pstatic.net/common/?src=http%3A%2F%2Fblogfiles.naver.net%2FMjAxNzEwMTBfOTMg%2FMDAxNTA3NjE1MDQzMzQ0.mQ3gPSqDdbNMavkKS1csNVo5YBzLxt6IqfWno_FKZJMg.1UcpdHXjFfd3Eh7HCAgIst02Rp_CU7N4rnhol5YjtL8g.JPEG.couragejung%2F40-2017-0018544.jpg&type=a340" alt="귀여운">
		<h1><a href="http://localhost/index.php">JavaScript</a></h1>
	</header>
	<nav>
		<ol>
			<?php
			while($row=mysqli_fetch_assoc($result)){
				echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
			}
			?>
		</ol>

	</nav>
	<div id="control">
	<input type="button"value="white"onclick="document.getElementById("target").className="white""/>
	<input type="button"value="black"onclick="document.getElementById("target").className="black""/>
	<a href="http://localhost/write.php">쓰기</a>
	</div>
<article class="">
<form action="process.php" method="POST">
<p>
  제목:<input type="text" name="title">
</p>
<p>
  작성자:<input type="text" name="author">
</p>
<p>
  본문:<textarea name="description"></textarea>
</p>
<input type="submit" name="name">
</form>
</article>
</body>
</html>
