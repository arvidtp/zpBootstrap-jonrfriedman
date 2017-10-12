		<?php if (zpB_hasNextNewsPage()) { ?>
		<div class="infinit-pagination">
			<?php zpB_printNextNewsPageURL(gettext('Next page'), 'infinit-next-page'); ?>
		</div>

		<div class="margin-bottom-double view-more">
			<button class="btn btn-default center-block"><?php echo gettext_th('View more news', $me); ?></button>
		</div>

		<div class="page-load-status margin-top-double margin-bottom-double">
			<div class="loader-ellips infinite-scroll-request">
				<span class="loader-ellips-dot"></span>
				<span class="loader-ellips-dot"></span>
				<span class="loader-ellips-dot"></span>
				<span class="loader-ellips-dot"></span>
			</div>
			<div class="infinite-scroll-last infinite-scroll-error"><?php echo gettext_th('No more news to display', $me); ?></div>
		</div>

		<script type="text/javascript" src="<?php echo $_zp_themeroot; ?>/js/infinite-scroll.pkgd.min.js"></script>
		<script type="text/javascript">
		//<![CDATA[
			var $container = $('.news-wrap');
			var $pageLoadStatus = $('.page-load-status');
			var $viewMoreButton = $('.view-more');
			$('.infinit-pagination a').addClass('infinit-next-page');

			$(document).ready( function() {

				$container.infiniteScroll({
					path : '.infinit-next-page',
					append : '.list-post',
					hideNav : '.infinit-pagination',
					status : '.page-load-status',
					loadOnScroll : false,
				});

				$viewMoreButton.on( 'click', function() {
					$container.infiniteScroll('loadNextPage');
					$container.infiniteScroll('option', {
						loadOnScroll : true,
					});
					$viewMoreButton.remove();
				});

				$container.on( 'last.infiniteScroll', function( event, response, path ) {
					$pageLoadStatus.animate({ opacity: 0 }, 5000);
				});

			});
		//]]>
		</script>
		<?php } ?>