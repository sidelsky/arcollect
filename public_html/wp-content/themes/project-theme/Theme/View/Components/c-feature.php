<?php 
if( $data['inlineBlock'] ) {
	$class = 'is_inline';
} else {
	$class = 'is_flex';
};
?>
							
<?php if( $data['showFeature'] ) { ?>
	<section class="u-section u-bg-color--bw-white">
	<div class="u-l-container--center" data-in-viewport>
		<div class="u-l-container u-l-container--row u-l-horizontal-padding u-l-vertical-padding">
			
		<?php if( $data['showQuoteIcon'] ) { ?>
			<div class="c-features__quote-mark">
				<svg>
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-quote" viewBox="0 0 32 32"></use>
				</svg>
			</div>
		<?php } ?>

			<?php if( $data['featuresTitle'] ) { ?>
				<h2 class="c-site-headings--h2 c-site-headings--h2--feature"><?= $data['featuresTitle']; ?></h2>
			<?php } ?>
			<?php if( $data['featureDescription'] ) { ?>
					<div class="c-features__description"><?= $data['featureDescription'] ?></div>
			<?php } ?>

			<div class="c-features">
				<?php foreach($data['items'] as $feature) { ?>
				<?php
					//Get the image
					$image = $feature['featureIcon'];      
					//Get the image file path
					$imageFileType = new SplFileInfo($image);
					//Get extension 
					$extensionTypeIs = $imageFileType->getExtension();
					//Icon class
					$iconClass = '';
					//Check if has svg extention
					if( $extensionTypeIs == 'svg' ) { ?>
						<div class="c-feature-card <?= $class ?>">
							<span class="c-feature-card__icon">
								<img src="<?= $image ?>" alt="<?= $feature['alt']; ?> Icon">
							</span>
							<?php if( $feature['featureTitle'] ) {?>
								<h3 class="c-site-headings--h3 c-feature-card__title"><?= $feature['featureTitle'] ?></h3>
							<?php } ?>
							<?php if( $feature['featuresDescription'] ) {?>
								<?= $feature['featuresDescription'] ?>
							<?php } ?>
						</div>
					<?php } else { ?>
						<div class="c-feature-card <?= $class ?>">
						<?php if( $image ) { ?>
							<div class="c-feature-card__image">
							<?php if( $feature['featuresLink'] ) { ?><a href="<?= $feature['featuresLink']; ?>" target="_blank"><?php } ?>
									<img src="<?= $feature['featureIcon']; ?>" alt="<?= $feature['alt']; ?> logo">
							<?php if( $feature['featuresLink'] ) { ?></a><?php } ?>
							</div>
						<?php } ?>
						<?php if( $feature['featuresDescription'] ) {?>
							<div class="c-feature-card__blockquote">
								<?= $feature['featuresDescription'] ?>
							</div>
						<?php } ?>
						<?php if( $feature['featureTitle'] ) {?>
							<div class="c-site-headings--h3 c-feature-card__title">
								<?= $feature['featureTitle'] ?>
							</div>
						<?php }?>
						</div>
					<?php }?>

				<?php } ?>
			</div>

		</div>
	</div>
	</section>
<?php } ?>