<?php

namespace Drupal\isced_code\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\OptGroup;

/**
 * Plugin implementation of the 'isced_code_default' formatter.
 *
 * @FieldFormatter(
 *   id = "isced_code_default",
 *   label = @Translation("Default"),
 *   field_types = {
 *     "isced_code"
 *   }
 * )
 */
class IscedCodeDefaultFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $isced_codes = \Drupal::service('isced_code.isced_code')->getOptions();
    $options = OptGroup::flattenOptions($isced_codes);

    $elements = [];

    foreach ($items as $delta => $item) {
      $value = (\array_key_exists($item->value, $options))
        ? $options[$item->value]
        : $item->value;

      $elements[$delta] = ['#markup' => $value];
    }

    return $elements;
  }

}
