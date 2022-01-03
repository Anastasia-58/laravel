<?php $keys = array_keys($categories); ?>

<?php foreach ($keys as $key): ?>
    <a href="<?=route('news.index',['category'=>$key])?>"><h1><?=$categories[$key]['name']?></h1></a>
<?php endforeach; ?>

