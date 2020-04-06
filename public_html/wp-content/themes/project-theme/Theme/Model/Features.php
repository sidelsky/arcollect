<?php
namespace Theme\Model;

use App\WordPress\WordPress;

class Features {

   public function __construct($layout)
   {
      $this->layout = $layout;
   }

   public function getFeatures() {
      $acfFeatureItems = $this->layout['feature_item'];
      $featuresTitle = $this->layout['feature_title'];
      $featureDescription = $this->layout['feature_description'];
      $showQuoteIcon = $this->layout['show_quote_icon'];
      $inlineBlock = $this->layout['inline_block'];
      $show = $this->layout['show'];
      $featureItems = [];
   
      foreach($acfFeatureItems as $feature) {
         $featureItems[] = [
            'featureIcon' => $feature['icon']['url'],
            'alt' => $feature['icon']['alt'],
            'featureTitle' => $feature['title'],
            'featuresDescription' => $feature['description'],
            'featuresLink' => $feature['feature_link']
         ];
      }

      return [
         'layoutName' => 'features_module',
         'featuresTitle' => $featuresTitle,
         'featureDescription' => $featureDescription,
         'inlineBlock' => $inlineBlock,
         'showQuoteIcon' => $showQuoteIcon,
         'items' => $featureItems,
         'showFeature' => $show
      ];
   }
}