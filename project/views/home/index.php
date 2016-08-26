<?php $this->title = 'Добре дошли в "Обяви.Ме"'; ?>

<aside>
    <h2>Последни обяви</h2>
    <?php foreach ($this->sidebarAds as $ad) : ?>
        <ul class="aside-ul">
            <li><a href="<?=APP_ROOT?>/home/view/<?=$ad['id']?>"><?=htmlentities($ad['title'])?></a></li>
        </ul>
    <?php endforeach ?>
</aside>

<h2 class="pages-titles"><?=htmlspecialchars($this->title)?>!</h2>

<main id="advertisements">
    <article>
        <?php foreach ($this->advertisements as $advertisement) : ?>
            <a href="<?=APP_ROOT?>/home/view/<?=$advertisement['id']?>">
                <h2 class="title"><?=htmlentities($advertisement['title'])?></h2>
            </a>
            <div class="date">Публикувана на
                <?=(new DateTime($advertisement['date']))->format('d-M-Y')?>
                от <i><?=htmlentities($advertisement['full_name'])?></i>
            </div>
            <p class="content-index"><?=$advertisement['content']?></p>
            <i>Цена: </i><?=htmlentities($advertisement['price'])?>
        <?php endforeach ?>
    </article>
</main>