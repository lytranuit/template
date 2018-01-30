<?php
$dirs = array_filter(glob('*'), 'is_dir');
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<?php foreach ($dirs as $key => $row): ?>
    <div>
        <a href="<?= $actual_link . $row ?>"><?= $row ?></a>
    </div>
<?php endforeach; ?>