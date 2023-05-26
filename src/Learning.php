<?php
namespace cloudgrayau\learning;

use cloudgrayau\utils\UtilityHelper;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;

use yii\base\Event;

class Learning extends Plugin {

  public static $plugin;
  public string $schemaVersion = '1.0.0';
  public bool $hasCpSettings = true;
  public bool $hasCpSection = true;
  
  // Public Methods
  // =========================================================================
  
  public function init(): void {
    parent::init();
    self::$plugin = $this;
    $this->_registerComponents();  
  }
  
  // Private Methods
  // =========================================================================
  
  private function _registerComponents(): void {
    UtilityHelper::registerModule();
  }
  
  // Protected Methods
  // =========================================================================

}
