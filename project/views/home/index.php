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

<main>
    <article>
        <?php foreach ($this->advertisements as $this->advertisement) : ?>
            <a href="<?=APP_ROOT?>/home/view/<?=$this->advertisement['id']?>">
                <h2 class="title"><?=htmlentities($this->advertisement['title'])?></h2>
            </a>
            <div class="date">Публикувана на
                <?=(new DateTime($this->advertisement['date']))->format('d-M-Y')?>
                от <a href="<?=APP_ROOT?>/users/profile/<?=$this->advertisement['user_id']?>"><i><?=htmlentities($this->advertisement['full_name'])?></i></a>
            </div>
            <p class="content-index"><?=$this->advertisement['content']?></p>
            <i>Цена: </i><?=htmlentities($this->advertisement['price'])?> лв.
        <?php endforeach ?>
    </article>
</main>