<?php
require_once("includes/database.php");

$query = "SELECT * FROM article;";
$articles_raw = mysqli_query($conn, $query);
$articles = mysqli_fetch_all($articles_raw, MYSQLI_ASSOC);

?>

<? require("includes/header.php") ?>
<h1>Nick's Blog</h1>
<section>
	<? if ($articles === null) : ?>
		<p class="lead">No Posts</p> 
	<? else : ?>
		<? foreach ($articles as $article) : ?>
			<article>
				<h2>
					<a href="article.php?id=<?= $article['id'] ?>">
						<?= $article['title'] ?>
					</a>
				</h2>
				<p><?= $article['content'] ?></p>
			</article>
		<? endforeach; ?>
	<? endif; ?>
</section>
<? require("includes/footer.php") ?>