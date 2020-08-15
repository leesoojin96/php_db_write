<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>텍스트 전송</title>
  </head>
  <body>
    <form action="http://localhost/db/formEx.php" method="post">
      <p>제목 : <input type="text" name="title"></p>
      <p>본문 : <textarea name="description"></textarea></p>
      <input type="submit">
    </form>

    <!-- http://localhost/db/formEx.php?title=title&description=desc
                                fromEx.php에 입력값을 전달하고 있다
    -->
  </body>
</html>
