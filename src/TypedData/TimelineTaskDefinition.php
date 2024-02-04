<?php

namespace Drupal\farm_crop_plan\TypedData;

use Drupal\Core\TypedData\ComplexDataDefinitionBase;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\TypedData\ListDataDefinition;

/**
 * Timeline task definition.
 */
class TimelineTaskDefinition extends ComplexDataDefinitionBase {

  /**
   * {@inheritdoc}
   */
  public function getPropertyDefinitions() {
    if (!isset($this->propertyDefinitions)) {

      $this->propertyDefinitions['id'] = DataDefinition::create('string')
        ->setLabel(t('ID'))
        ->setRequired(TRUE);

      $this->propertyDefinitions['resource_id'] = DataDefinition::create('string')
        ->setLabel(t('Resource ID'))
        ->setRequired(TRUE);

      $this->propertyDefinitions['label'] = DataDefinition::create('string')
        ->setLabel(t('Label'));

      $this->propertyDefinitions['edit_url'] = DataDefinition::create('uri')
        ->setLabel(t('Edit URL'));

      $this->propertyDefinitions['start'] = DataDefinition::create('timestamp')
        ->setLabel(t('Start Time'))
        ->setRequired(TRUE);

      $this->propertyDefinitions['end'] = DataDefinition::create('timestamp')
        ->setLabel(t('End Time'))
        ->setRequired(TRUE);

      $this->propertyDefinitions['enable_dragging'] = DataDefinition::create('boolean')
        ->setLabel(t('Enable dragging'));

      $this->propertyDefinitions['meta'] = DataDefinition::create('any')
        ->setLabel(t('Meta'));

      $this->propertyDefinitions['classes'] = ListDataDefinition::create('string')
        ->setLabel(t('Classes'));

    }
    return $this->propertyDefinitions;
  }

}
