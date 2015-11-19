<?php
    $BlogsController = new BlogsController($db, $plural_resource);
    $blog = $BlogsController->edit($id, $_POST);
    var_dump($_POST);
?>

<div>
  <form action="" method="post">
    <div>
      <h1>編集画面</h1>
      <input type="text" name="title" value="<?php echo $blog['title']; ?>"style="width:300px; height:20px">
    </div><br>

    <div>
      <textarea name="body" style="width:700px; height:500px"><?php echo $blog['body']; ?></textarea>
    </div>
 
    <div>
      <input type="submit" value="編集完了"style="width:200px; height:20px;font-size:20px">
    </div>
  </form>
</div>



















