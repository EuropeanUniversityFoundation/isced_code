<?php

namespace Drupal\isced_code\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\options\Plugin\Field\FieldType\ListStringItem;

/**
 * Plugin implementation of the 'isced_code' field type.
 *
 * @FieldType(
 *   id = "isced_code",
 *   label = @Translation("ISCED code"),
 *   description = @Translation("ISCED codes as select options"),
 *   category = @Translation("EWP"),
 *   default_widget = "options_select",
 *   default_formatter = "isced_code_formatter",
 * )
 */
class IscedCode extends ListStringItem {

  /**
   * {@inheritdoc}
   */
  public static function defaultStorageSettings() {
    return [
      'allowed_values' => [],
      'allowed_values_function' => 'isced_code_get_values',
    ] + parent::defaultStorageSettings();
  }

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    $properties = parent::propertyDefinitions($field_definition);

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    $schema = parent::schema($field_definition);

    return $schema;
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    $value = $this->get('value')->getValue();
    return $value === NULL || $value === '';
  }

}
