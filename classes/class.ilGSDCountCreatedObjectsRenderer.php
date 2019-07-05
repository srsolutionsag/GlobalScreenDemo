<?php

use ILIAS\GlobalScreen\Scope\MainMenu\Collector\Renderer\BaseTypeRenderer;
use ILIAS\GlobalScreen\Scope\MainMenu\Factory\isItem;
use ILIAS\UI\Component\Component;

/**
 * Class ilGSDCountCreatedObjectsRenderer
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class ilGSDCountCreatedObjectsRenderer extends BaseTypeRenderer
{

    /**
     * @inheritdoc
     * Just return the UI-Component for your Special type
     */
    public function getComponentForItem(isItem $item) : Component
    {
        /**
         * @var $item ilGSDCountCreatedObjects
         */
        return $this->ui_factory->mainControls()->slate()->legacy(
            "gsco",
            $this->ui_factory->symbol()->glyph()->user(),
            $item->getStringWithTheAmountOfCreatedILIASObjectsInThisSessionAsComponent()
        )->withEngaged(true);
    }
}
