<?php

use ILIAS\GlobalScreen\Collector\MainMenu\Renderer\BaseTypeRenderer;
use ILIAS\GlobalScreen\MainMenu\isItem;
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
		return $item->getContent();
	}
}
