<?php
namespace cloudgrayau\learning\assetbundles;

use craft\web\AssetBundle;

class LearningAsset extends AssetBundle {
    
    // Public Methods
    // =========================================================================

    public function init(): void {
        $this->sourcePath = "@cloudgrayau/learning/resources";
        /*$this->css = [
            'css/cloudgray.css',
        ];*/
        parent::init();
    }
}
