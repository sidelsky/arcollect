<?php
/**
 * Template name: Contact
 */
use App\Helper\Render;
use Theme\Model\Contact;
use Theme\Model\Enquiries;

$render = new Render;
$contact = new Contact();
$enquiries = new Enquiries();

include("header.php"); ?>

<section class="u-section">
    <div class="u-l-container--center">
        <div class="u-l-container u-l-horizontal-padding u-l-vertical-padding">
    
<?php

    //Contact Details
    $template = 'c-contact';
    $data = $contact->getData();
    echo $render->view('Components/' . $template, $data);

    //Enquiries
    $template = 'c-enquiries';
    $data = $enquiries->getData();
    echo $render->view('Components/' . $template, $data);

?>
        </div>
    </div>
</section>


<?php include("footer.php"); ?>
