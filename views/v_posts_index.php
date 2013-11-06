

<table>

<?php foreach($posts as $post): ?>

<article>
	<tr>
    <h3><?=$post['first_name']?> <?=$post['last_name']?> posted:</h3>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>
</tr>
</article>
<hr>

<?php endforeach; ?>

</table>