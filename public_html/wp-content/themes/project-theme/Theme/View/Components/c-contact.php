<section class="u-section u-bg-color--bw-white">
    <div class="u-l-container--center u-l-container" data-in-viewport>
        <div class="u-l-container u-l-container--row u-l-horizontal-padding u-l-vertical-padding--small">

            <div class="c-contact">
                <h4 class="c-contact__title">Send us a message</h4>
                <?php
                    echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]');
                ?>
            </div>

            <?php foreach($data['contactList'] as $contact) { ?>
                <div class="c-contact">
                    <h4 class="c-contact__title"><?= $contact['detailTitle']; ?></h4>
                    <?= $contact['detail']; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>