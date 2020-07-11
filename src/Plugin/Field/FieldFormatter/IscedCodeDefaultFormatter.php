<?php

namespace Drupal\isced_code\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;

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
    $elements = [];
    foreach ($items as $delta => $item) {
      $elements[$delta] = ['#markup' => $item->value];
    }
    return $elements;
  }

}
