<?php $this->title  = $this->advertisement['title']; ?>

<h1><?=htmlspecialchars($this->title)?></h1>



<main id="advertisements">
    <article>
        <div class="date">Публикувана на
            <?=(new DateTime($this->advertisement['date']))->format('d-M-Y')?>
            от <i><?=htmlentities($this->advertisement['full_name'])?></i>
        </div>
        <p class="content"><?=$this->advertisement['content']?></p>
    </article>
</main>