<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="post-content">
				<h2><?=$section->page_title;?></h2>
				<? if($section->image != ''){ ?>
					<div class="post-image" style="background-image:url(<?=$section->image;?>)"></div>
				<? } ?>
				<div><?=$section->page_content;?></div>
				<div class="help-block">Creado el <?=$section->registered;?> por  <?=$section->username;?></div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row related-posts">
		<?php foreach($related as $post){?>
			<div class="col-md-3 related-post">
				<h4><?=substr($post->name, 0, 28);?>...</h4>
				<? if($post->image != ''){ ?>
					<div class="related-post-image" style="background-image:url(<?=$post->image;?>)"></div>
				<? } ?>
				<div class="related-post-content"><?=substr($post->description, 0, 200);?>...</div>	
				<div class="post-info">
					<a href="<?=$post->url;?>" class="btn-mas" >ver más</a>		
				</div>
			</div>
		<? } ?>
	</div>
</div>

