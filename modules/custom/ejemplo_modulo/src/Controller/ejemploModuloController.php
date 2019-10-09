<?php

namespace Drupal\ejemplo_modulo\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines ejemploModuloController class.
 */
class ejemploModuloController extends ControllerBase {

  /**
   * Display the markup.
   */
  public function example() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Este es un módulo basico de ejemplo'),
    ];
  }

}