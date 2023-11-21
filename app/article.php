<?php
require_once("includes/database.php");

$article_id = $_GET["id"];
$article = null;

if (isset($article_id) && is_numeric($article_id)) {
  $sql = "SELECT * FROM article WHERE id = '$article_id'";
  $article_raw = mysqli_query($conn, $sql);
  $article = mysqli_fetch_assoc($article_raw);
}

?>

<? require("includes/header.php") ?>
<? if ($article === null) : ?>
  <p>Article not found.</p>
<? else : ?>
  <section>
    <article>
      <h2><?= $article["title"] ?></h2>
      <p class="lead"><?= $article["content"] ?></p>
      <p><?= $article["date"] ?></p>
    </article>
  </section>
<? endif; ?>
<? require("includes/footer.php") ?>