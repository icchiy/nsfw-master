<?php
    $BlogsController = new BlogsController($db, $plural_resource, $action);
    $blog_record = $BlogsController->show($id);

    $blog = mysqli_fetch_assoc($blog_record);
?>

<h2>記事詳細</h2>

<div style="width:300px; height:20px"><?php echo $blog['title']; ?></div><br>
<divstyle="width:700px; height:500px"><?php echo $blog['body']; ?></div><br>

<?php echo '<a href="../index">一覧へ</a>' ?>
