<?php

namespace Drupal\isced_code\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'isced_code_default' widget.
 *
 * @FieldWidget(
 *   id = "isced_code_default",
 *   module = "isced_code",
 *   label = @Translation("Select list"),
 *   field_types = {
 *     "isced_code"
 *   }
 * )
 */
class IscedCodeDefaultWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $isced_codes = \isced_code_get_values();
    $element['value'] = $element + [
      '#type' => 'select',
      '#options' => $isced_codes,
      '#empty_value' => '',
      '#default_value' => isset($items[$delta]->value) ? $items[$delta]->value : NULL,
      '#description' => t('Select the ISCED code'),
    ];

    return $element;
  }

}
