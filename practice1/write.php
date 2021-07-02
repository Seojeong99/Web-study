<?php
require_once('conn.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <title></title>
  <link rel='stylesheet' href="style.css" media='screen' title='no title' charset='utf-8'>
  	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFIe9fwXBkNWqOyVOVcnDZv3oif6lm3zJAZQ&usqp=CAU" alt="귀여운" class="img-circle" id="logo">
</head>
<body id="body">
  <header>
    <h1><a href="index.php">이서정의 페이지 Javascript</h1>
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
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</div>
</body>
</html>
