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
    <h1><a href="index.php">WEOLCOME! MY NAME IS SEOJEONG</h1>
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

<div id='move'>
  <article>
    <?php
    if(empty($_GET['id'])){
      echo"WELCOME";
    }
    else{
     $id = mysqli_real_escape_string($conn,$_GET['id']);
     $sql = 'SELECT * FROM topic WHERE id='.$id;
     $sql ='SELECT topic.id, topic.title, topic.description,  user.name, topic.created FROM topic LEFT JOIN user ON topic.author=user.id WHERE topic.id='.$id;
     $result=mysqli_query($conn, $sql);
     $row=mysqli_fetch_assoc($result);
     ?>
     <h2><?= htmlspecialchars($row['title']) ?></h2>
     <div><?=htmlspecialchars($row['created'])?>|<?=htmlspecialchars($row['name'])?></div>
     <div><?=htmlspecialchars($row['description'])?></div>

  </article>
  <?php
    }
      ?>
        <input type="button" name="name" value="white" onclick="document.getElementById('body').className=''">
        <input type="button" name="name" value="black" onclick="document.getElementById('body').className='black'">
        <a href="write.php">쓰기</a>

</div>
      <div>
      </body>
      </html>
