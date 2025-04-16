<?php

namespace Wooping\ShopHealth\Views\Widgets;

use ShopMaestro\Conductor\Widgets\FAQ as Contract;

class FAQ extends Contract{

	/**
	 * Unique identifier for the Widget.
	 */
	protected string $id = 'shop-health-faq';

	/**
	 * Widget title as displayed in the dashboard
	 */
	protected string $name = 'Shop Health';

	/**
	 * Widget title as displayed in the dashboard
	 */
	protected string $title = 'Shop Health';


	/**
	 * Return the FAQ array
	 *
	 * @return array
	 */
	public function get_questions(): array {
		return [
			[
				'question' => __( 'Is Shop Health really free?', 'wooping-shop-health' ),
				'answer' => __( 'Yes.', 'wooping-shop-health')
			],
			[
				'question' => __( 'What does this plugin do?', 'wooping-shop-health' ),
				'answer' => __( 'Gives you a clear overview of things to improve in your webshop', 'wooping-shop-health' )
			]
		];
	}

}
