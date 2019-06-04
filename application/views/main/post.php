<?php
$_POST["current_page"] = "post";
?>
<head>
 <title><?php echo htmlspecialchars($data['title'], ENT_QUOTES);?></title>
</head>

<?php
require('get_imgs.php');
require('youtube_regex.php');
$imgs_array = get_imgs($data['id']);
?>


<section id="gallery-section" class="section"><div class="container">
<h2 class="section-title">«<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>»<br>
  <strong><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></strong></h2>
		<div class="post-text">
		<p><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?></p>
    <br>

    <div class="summ-price"><p>Итого:<?php echo htmlspecialchars($data['price'], ENT_QUOTES);?>р.</p></div>
		<p class="master-name-quote">Частный <span style="color:#0785c8;">мастер</span></p>	<br><br>
		</div>

    <?php   if($data['youtube'] != "none"):?>
		<div class="video-about">
		<p class="text-video-about">Отзыв клиента
		<br>
		<?php echo $data['client'];?>
		</p>


		<?php
    $ylink =  'https://www.youtube.com/embed/'.YouTubeLink($data['youtube']);?>
		<div class="you-video"><iframe width="100%" height="315"
		src="<?php echo $ylink;?>"
		frameborder="0" allow="accelerometer; autoplay;
		encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>


		</div>
  <?php endif;?>

    <div class="after-before-container">


      <div class="post-after">
          <div class="after-block">
        <h3 class="after-h" style="color: #ffc107;">После Ремонта</h3>
      </div>
        <?php
            //echo $data['youtube'];
      foreach($imgs_array as $img_now){
        if (strripos($img_now, 'before') === false){
          echo '<div class = "blok_img" >
                      <img src="'.$img_now.'" class="pimg" style="width:100%;" />
                  </div>';
        }
      }
        ?>

      </div>

    <div class="post-before">
      <div class="before-block">
      <h3 class="before-h">До Ремонта</h3>
    </div>
  		<?php
  				//echo $data['youtube'];
    $after_count = true;
  	foreach($imgs_array as $img_now){
        if (strripos($img_now, 'before') != false){
            $after_count = false;
  		echo '<div class = "blok_img" >
                  <img src="'.$img_now.'" class="pimg" style="width:100%;" />
              </div>';
            }
  	}


    if($after_count == true){

  echo "<style>
      .post-before {
        display:none;
      }

      .post-after{
      	width: 100%;
      	float: none;
      }

      .after-block{
        display:none;
      }

    </style>";
    }

      ?>

    </div>


    </div>

	</div>
</section>
