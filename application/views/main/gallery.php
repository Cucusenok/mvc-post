<?php
$_POST["current_page"] = "gallery";
require('get_imgs.php');
?>

<link rel='stylesheet' id='idealhome-bootstrap-css'  href='/public/styles/style.css' type='text/css' media='all' />
		<section id="gallery-section" class="section"><div class="container">

			<?php if (empty($list)): ?>
                <p>Список постов пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
				<div class="gallery-container">
				<div class="about-post"><div class="about-post-p">
				<a href="/post/<?php echo $val['id']; ?>">Подробнее</a></div></div>
                    <div class="gallery-preview">
                        <a href="/post/<?php echo $val['id']; ?>">
                            <h2 class="gallery-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                            <h5 class="gallery-subtitle"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></h5>
                        </a>
						<?php $imgs_array = get_imgs($val['id']);?>
						<img src="<?php echo $imgs_array[0]; ?>">
                    </div>
                    <hr>
					</div>
                <?php endforeach; ?>
                <div class="clearfix">
                    <?php echo $pagination; ?>

                </div>
            <?php endif; ?>

	</div>
</section>
