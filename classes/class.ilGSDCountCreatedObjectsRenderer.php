<?php

use ILIAS\GlobalScreen\Scope\MainMenu\Collector\Renderer\BaseTypeRenderer;
use ILIAS\GlobalScreen\Scope\MainMenu\Factory\isItem;
use ILIAS\UI\Component\Component;

/**
 * Class ilGSDCountCreatedObjectsRenderer
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class ilGSDCountCreatedObjectsRenderer extends BaseTypeRenderer {

	/**
	 * @inheritdoc
	 * Just return the UI-Component for your Special type
	 */
	public function getComponentForItem(isItem $item): Component {
		/**
		 * @var $item ilGSDCountCreatedObjects
		 */
		return $item->getStringWithTheAmountOfCreatedILIASObjectsInThisSessionAsComponent();
	}
}
