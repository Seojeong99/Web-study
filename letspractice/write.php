<?php
require_once('conn.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
  <link rel='stylesheet' href="style.css" media='screen' title='no title' charset='utf-8'>
  <link href="//fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext" rel="stylesheet" type="text/css">
</head>
<body id="body">
  <header>
    <h1><a href="index.php">WELCOME! MY NAME IS SEOJEONG</h1>
  </header>
  <nav>
    <ol>

<?php

$result=mysqli_query($conn, 'SELECT *FROM topic');
while($row=mysqli_fetch_assoc($result)){//실행될때마다 행 하나씩 호출해줌. 더이상 가져올데이터 없으면 NULL
  echo '<li><a href="index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>';
}
  ?>

    </ol>
  </nav>
  <div id="content">
  <article>
    <form class="" action="process.php" method="post">
      <p>
      <label for="title">제목:</label>
      <input id='text' type="text" name= "title">
      </p>

      <p>
      <label for="author">저자:</label>
      <input id='author' type="text" name= "author" value="">
      </p>

      <p>
      <label for="description">본문:</label>
      <textarea name="name", rows="8", cols="40"></textarea>
      </p>

      <p>
        <input type="submit"value="제출">
      </p>
    </form>
    <input type="button" name="name" value="white" onclick="document.getElementById('body').className=''">
    <input type="button" name="name" value="black" onclick="document.getElementById('body').className='black'">
    <a href="write.php">쓰기</a>

  </article>

<div>
</body>
</html>
