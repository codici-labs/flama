<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
 <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item item-1 active">
     
      <div class="carousel-caption">
      Flama CMS
      </div>
    </div>
    
  </div>

 
</div>
<div class="container">
	<div class="main">
		<h2>Ultimos artículos</h2>

		<div id="posts">
			<?php foreach($posts as $post){ ?>
				<div class="post">
					<h3><?=$post->name;?></h3>
					<? if($post->image != ''){ ?>
						<div class="list-post-image" style="background-image:url(<?=$post->image;?>)"></div>
					<? } ?>
					<p><?=$post->description;?></p>	
					<div class="post-info">
					<p><a href="<?=$post->url;?>" class="btn-mas">ver más</a></p>
					<p><strong>Creado el <?=$post->registered;?></strong></p>		
					</div>
				</div>
			<? } ?>
		</div>

	</div>
</div>