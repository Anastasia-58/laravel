<h1>Список новостей:</h1>
<br>

<?php foreach ($news as $newsItem): ?>
<div>
    <strong><a href="<?=route('newsID.index',['id'=>$newsItem['id'],'category'=>$category])?>"><?=$newsItem['title']?></a></strong>
    <p><?=$newsItem['description']?></p>
    <em><?=$newsItem['author']?></em>

    <hr>
</div>
<?php endforeach; ?>
