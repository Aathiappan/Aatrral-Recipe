<?php

namespace Drupal\recipe\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;
/**
 * Controller for the recipe page.
 */
class RecipePageController extends ControllerBase {

  /**
   * Returns the content for the recipe page.
   */
  public function content() {
    // Create a link to the Jeevamitham page.
    $jeevamirtham_url = Url::fromRoute('recipe.jeevamirtham_page');
    $jeevamirtham_link = Link::fromTextAndUrl('link', $jeevamirtham_url);

    // Create a link to the Ganajeevamitham page.
    $ganajeevamritham_url = Url::fromRoute('recipe.ganajeevamritham_page');
    $ganajeevamritham_link = Link::fromTextAndUrl('link', $ganajeevamritham_url); 
	
	$agniashthiram_url = Url::fromRoute('recipe.agniashthiram_page');
    $agniashthiram_link = Link::fromTextAndUrl('link', $agniashthiram_url); 
	
	$beejamirtham_url = Url::fromRoute('recipe.beejamirtham_page');
    $beejamirtham_link = Link::fromTextAndUrl('link', $beejamirtham_url); 

    /*return [
      '#markup' => $cards_markup,//
    ];*/
	return [
      '#type' => 'inline_template',
      '#template' => '<div style="display:flex;flex-wrap:wrap;" id="recipe-card">
						<div class="card-deck">
							<div style="width:250px;margin-bottom:18px;padding:8px !important;" class="card">
								<div class="card-body">
									<h5 style="color:green" class="card-title">Jeevamirtham Page</h5>
									<p class="card-text">Click below to visit the Jeevamirtham page</p>
									{{jeev_url}}
								</div>
							</div>
							<div style="width:250px;margin-bottom:18px;padding:8px !important;" class="card">
								<div class="card-body">
									<h5 style="color:green" class="card-title">Agniashthiram Page</h5>
									<p class="card-text">Click below to visit the Agniashthiram page</p>
									{{agniash}}
								</div>
							</div>
						</div>
						<div class="card-deck" id="recipe-clm2">
							<div style="width:250px;margin-bottom:18px;padding:8px !important;" class="card">
								<div class="card-body">
									<h5 style="color:green" class="card-title">Beejamirtham Page</h5>
									<p class="card-text">Click below to visit the Beejamirtham page</p>
									{{beeja}}
								</div>
							</div>
							<div style="width:250px;margin-bottom:18px;padding:8px !important;" class="card">
								<div class="card-body">
									<h5 style="color:green" class="card-title">Ganajeevamritham Page</h5>
									<p class="card-text">Click below to visit the Ganajeevamritham page</p>
									{{ganjeev_url}}
								</div>
							</div>
						</div>
					</div>
					<style>
						@media screen and (min-width: 568px) and (max-width: 586px) {
							#recipe-card.card-deck.card{
								width: 240px !important;
							}
						}
						@media screen and (min-width: 568px){
							#recipe-clm2{
								margin-left: 18px !important;
							}
						}
						@media screen and (min-width: 801px){
							#recipe-card{
								margin-left:85px;
							}
						}
						@media screen and (max-width: 800px){
							#recipe-card{
								justify-content: center;
							}
						}
					</style>',
      '#context' => [
        'jeev_url' => $jeevamirtham_link->toString(),
        'ganjeev_url' => $ganajeevamritham_link->toString(),
        'agniash' => $agniashthiram_link->toString(),
        'beeja' => $beejamirtham_link->toString()
      ],
    ];
  }

  /**
   * Returns the content for the Jeevamitham page.
   */
  public function jeevamirthamContent() {
    // Replace 'https://example.com/iframe-content' with the URL of your iframe content.
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
    // Replace 'https://example.com/iframe-content' with the URL of your iframe content.
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
    // Replace 'https://example.com/iframe-content' with the URL of your iframe content.
    $iframe_url = 'https://aatrral.org/bioinputs/beejamirtham';

    return [
      '#type' => 'inline_template',
      '#template' => '<iframe src="{{ iframe_url }}" width="100%" height="600" frameborder="0"></iframe>',
      '#context' => [
        'iframe_url' => $iframe_url,
      ],
    ];
  }
  public function ganajeevamrithamContent() {
    // Replace 'https://example.com/iframe-content' with the URL of your iframe content.
    $iframe_url = 'https://aatrral.org/bioinputs/ganajeevamritham';

    return [
      '#type' => 'inline_template',
      '#template' => '<iframe src="{{ iframe_url }}" width="100%" height="600" frameborder="0"></iframe>',
      '#context' => [
        'iframe_url' => $iframe_url,
      ],
    ];
  }

}
