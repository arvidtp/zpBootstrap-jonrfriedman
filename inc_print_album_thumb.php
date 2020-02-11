		<div class="row album-wrap margin-bottom-double">
			<?php while (next_album()) { ?>
			<div class="col-sm-4 album-thumb">
				<a class="thumb" href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo html_encode(getBareAlbumTitle()); ?>">
					<?php //if ((isset($isHomePage)) && (!$isHomePage)) {
						if (1) {
						printCustomAlbumThumbImage(getBareAlbumTitle(), NULL, getOption('zpB_album_thumb_width'), getOption('zpB_album_thumb_height_square'), getOption('zpB_album_thumb_width'), getOption('zpB_album_thumb_height_square'), NULL, NULL, 'remove-attributes img-responsive'); 
					} else {
						printCustomAlbumThumbImage(getBareAlbumTitle(), NULL, getOption('zpB_album_thumb_width'), getOption('zpB_album_thumb_height'), getOption('zpB_album_thumb_width'), getOption('zpB_album_thumb_height'), NULL, NULL, 'remove-attributes img-responsive'); 
					} ?>
				</a>
				<a href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo html_encode(getBareAlbumTitle()); ?>">
				<?php if ((isset($isHomePage)) && (!$isHomePage)) { ?>
					<h5 class="homepage-albumName albumName"><?php printBareAlbumTitle(); ?></h5>
				<?php } else { ?>
					<h5 class="albumName"><?php printBareAlbumTitle(); ?></h5>
				<?php } ?>
				</a>
			</div>
			<?php } ?>
		</div>