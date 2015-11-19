<?php
    $BlogsController = new BlogsController($db, $plural_resource);
    $BlogsController->_new($_POST);
?>

<div>
  <form action="" method="post">
    <div>
      <h2>タイトル</h2>
      <input type="text" name="title" placeholder="タイトルを入力してください"style="width:300px; height:20px">
    </div>
    <div>
      <h3>内容</h3>
      <textarea name="body" style="width:700px; height:500px"></textarea>
    </div>
    <div>
      <input type="submit" value="記事投稿" style="width:200px; height:20px;font-size:20px">
    </div>
  </form>
</div>
