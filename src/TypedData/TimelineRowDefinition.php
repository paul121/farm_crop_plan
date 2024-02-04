<?php

namespace Drupal\farm_crop_plan\TypedData;

use Drupal\Core\TypedData\ComplexDataDefinitionBase;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\TypedData\ListDataDefinition;

/**
 * Timeline row definition.
 */
class TimelineRowDefinition extends ComplexDataDefinitionBase {

  /**
   * {@inheritdoc}
   */
  public function getPropertyDefinitions() {
    if (!isset($this->propertyDefinitions)) {

      $this->propertyDefinitions['id'] = DataDefinition::create('string')
        ->setLabel(t('ID'))
        ->setRequired(TRUE);

      $this->propertyDefinitions['label'] = DataDefinition::create('string')
        ->setLabel(t('Label'))
        ->setRequired(TRUE);

      $this->propertyDefinitions['link'] = DataDefinition::create('uri')
        ->setLabel(t('Link'));

      $this->propertyDefinitions['enable_dragging'] = DataDefinition::create('boolean')
        ->setLabel(t('Enable dragging'))
        ->addConstraint('NotNull');

      $this->propertyDefinitions['classes'] = ListDataDefinition::create('string')
        ->setLabel(t('Classes'));

      $this->propertyDefinitions['tasks'] = ListDataDefinition::create('farm_timeline_task')
        ->setLabel(t('Tasks'));

      $this->propertyDefinitions['expanded'] = DataDefinition::create('boolean')
        ->setLabel(t('Expanded'));

      $this->propertyDefinitions['children'] = ListDataDefinition::create('farm_timeline_row')
        ->setLabel(t('Children'));

    }
    return $this->propertyDefinitions;
  }

}
