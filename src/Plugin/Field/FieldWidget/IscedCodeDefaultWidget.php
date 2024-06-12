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
    $code_options = \Drupal::service('isced_code.isced_code')->getOptions();

    $default_code = $items[$delta]->value ?? NULL;
    $code_exists = FALSE;

    if (!empty($default_code)) {
      foreach ($code_options as $list) {
        if (\array_key_exists($default_code, $list)) {
          $code_exists = TRUE;
          break;
        }
      }
    }

    if (!empty($default_code) && !$code_exists) {
      $extra_option = [$default_code => $default_code];
      $extra_group = [$this->t('Current value')->render() => $extra_option];

      $code_options = \array_merge($extra_group, $code_options);
    }

    $element['value'] = $element + [
      '#type' => 'select',
      '#options' => $code_options,
      '#empty_value' => '',
      '#default_value' => $default_code,
      '#description' => $this->t('Select the ISCED code'),
    ];

    return $element;
  }

}
