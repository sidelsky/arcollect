<?php if( $data['showPlans'] ) : ?>
    <section class="u-section u-bg-color--bw-white">
        <div class="u-l-container--center" data-in-viewport>
            <div class="u-l-container u-l-container--row u-l-horizontal-padding u-l-vertical-padding">
                
                <?php if( $data['pricePlanTitle'] ) { ?> 
                    <h2 class="c-site-headings--h2 c-site-headings--h2--has-subcopy c-site-headings--h2--feature"><?= $data['pricePlanTitle'] ?></h2>
                <?php } ?>
                <?php if( $data['pricePlanDescription'] ) { ?> 
                    <p class="c-site-subcopy"><?= $data['pricePlanDescription'] ?></p>
                <?php } ?>

                <!--START: Price Plan -->
                <?php foreach($data['plans'] as $plan) { ?>
                    <div class="c-plan-card">
                        <div class="c-plan-card__header">
                            <?php if( $plan['planIcon'] ) :?>
                                <img class="c-plan-card__logo-mark" src="<?= $plan['planIcon'] ?>" alt="<?= $plan['planTitle'] ?>">
                            <?php endif; ?>
                            <h3 class="c-plan-card__title"><?= $plan['planTitle'] ?></h3>
                            <p class="c-plan-card__description"><?= $plan['planDescription'] ?></p>
                        </div>

                        <div class="c-plan-card__price-container">
                            <span class="c-plan-card__price">$<?= $plan['planPrice']; ?></span> <!--<span>PCM</span>-->
                        </div>
                        
                        <ul>
                        <?php foreach($plan['planDetails'] as $detail) { ?>
                            <li class="c-plan-card__detail"><?= $detail['planDetailTitle'] ?></li>
                        <?php } ?>  
                        </ul>

                        <a class="button button--solid c-plan-card__button" href="<?= $plan['planButtonLink']; ?>" target="_blank"><?= $plan['planButtonTitle']; ?></a>

                    </div>
                <?php } ?>
                <!--END: Price Plan -->

            </div>
        </div>
    </section>
<?php endif; ?>





