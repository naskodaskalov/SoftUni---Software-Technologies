<?php $this->title  = perm_title . ' :: ' . $this->advertisement['title']; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<main id="advertisements">
    <article>
        <div class="date">Публикувана на
            <?=(new DateTime($this->advertisement['date']))->format('d-M-Y')?>
            от <a href="<?=APP_ROOT?>/users/profile/<?=$this->advertisement['user_id']?>"><i><?php if ($this->advertisement['full_name'] == null) {
                        echo $this->advertisement['username'];
                    } else {
                        echo $this->advertisement['full_name'];
                    } ?></i></a>
            </div>
        <p class="content"><?=$this->advertisement['content']?></p>
        <i>Цена: </i><?=$this->advertisement['price']?> лв.
    </article>
</main>