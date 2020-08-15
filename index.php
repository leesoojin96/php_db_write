<?php
  // 서버접속
  $conn = mysqli_connect('localhost','root','wls120239');
  // DB선택
  mysqli_select_db($conn,'opentutorials');
  // 만든 테이블 조회
  $result = mysqli_query($conn,'SELECT * FROM topic');
  /*
  // 테이블 출력
  // assoc : 연관배열 식으로 정보를 가져온다
  $row = mysqli_fetch_assoc($result);
  // 테이블의 첫번째 행의 데이터만을 가져옴
  echo $row['id'];
  echo $row['title'];

  echo "<br />";

  $row = mysqli_fetch_assoc($result);
  echo $row['id'];
  echo $row['title'];

  echo "<br />";

  $row = mysqli_fetch_assoc($result);
  var_dump($row);
  // NULL -> php에서는 false 라는 의미도 동시에 가지고 있다
  */
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>first Page</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/php_js/php/style.css">
  </head>
  <body>
    <header>
      <img src="https://image-notepet.akamaized.net/resize/620x-/card_news/201907/8ee7feb500e154ba61bc0f8fad06b07f.jpg"
      alt="cat_study">
      <h1><a href="http://localhost/php_js/php/index.php">JavaScript</a></h1>
    </header>

    <nav>
      <ol>
      <?php
      while($row = mysqli_fetch_assoc($result)){
        echo '<li><a href="http://localhost/db/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
      }
       ?>
      </ol>
    </nav>

    <div>
      <a href="http://localhost/db/write.php">쓰기</a>
    </div>

    <article>
    <?php
      /* 입력된 아이디값이 있으면 해당 아이디 값의 파일을 불러오라
    if(empty($_GET['id']) == false){
    echo file_get_contents($_GET['id'].".txt");
    }
    // 아이디값이 없는 파일을 불러올 경우 에러가 발생할 수 있으므로 조건문을 작성해주면
    // 더 안전한 애플리케이션이 된다! */
    if(empty($_GET['id']) === false){
      $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
      $result = mysqli_query($conn.$sql);
      $row = mysqli_fetch_assoc($result);
      echo '<h2>'.$row['title'].'</h2>';
      echo $row['description'];
    }
     ?>
    </article>
  </body>
</html>
