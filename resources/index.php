<?php

require __DIR__ . '/header.php';

usort($articles, "sortArticlesByDate");

?>
<h1>Pitchf**k</h1>
<main>
    <?php
    foreach ($articles as $article) :
        ?>
        <article>
            <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>" />
            <h2><?php echo $article['title']; ?></h2>
            <p class="author">By: <?php echo $article['name']; ?></p>
            <p class="date">Published: <?php echo $article['date']; ?></p>
            <p><?php echo $article['content']; ?></p>
        </article> <?php endforeach; ?>
</main>


<?php

require __DIR__ . '/footer.php';

?>