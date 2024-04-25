<?php

namespace Drupal\recipe\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for the recipe page.
 */
class RecipePageController extends ControllerBase {

  /**
   * Returns the content for the recipe page.
   */
  public function content() {
    return [
      '#markup' => $this->t('This is the Recipe page.'),
    ];
  }

  /**
   * Returns the content for the Jeevamirtham page.
   */
  public function jeevamirthamContent() {
    $iframe_url = 'https://aatrral.org/bioinputs/jeevamirtham';

    return [
      '#type' => 'inline_template',
      '#template' => '<iframe src="{{ iframe_url }}" width="100%" height="600" frameborder="0"></iframe>',
      '#context' => [
        'iframe_url' => $iframe_url,
      ],
    ];
  }
  
  public function agniashthiramContent() {
    $iframe_url = 'https://aatrral.org/bioinputs/agniashthiram';

    return [
      '#type' => 'inline_template',
      '#template' => '<iframe src="{{ iframe_url }}" width="100%" height="600" frameborder="0"></iframe>',
      '#context' => [
        'iframe_url' => $iframe_url,
      ],
    ];
  }
  public function beejamirthamContent() {
    $iframe_url = 'https://aatrral.org/bioinputs/beejamirtham';

    return [
      '#type' => 'inline_template',
      '#template' => '<iframe src="{{ iframe_url }}" width="100%" height="600" frameborder="0"></iframe>',
      '#context' => [
        'iframe_url' => $iframe_url,
      ],
    ];
  }
  public function ganajeevamithamContent() {
    $iframe_url = 'https://aatrral.org/bioinputs/ganajeevamitham';

    return [
      '#type' => 'inline_template',
      '#template' => '<iframe src="{{ iframe_url }}" width="100%" height="600" frameborder="0"></iframe>',
      '#context' => [
        'iframe_url' => $iframe_url,
      ],
    ];
  }

}
