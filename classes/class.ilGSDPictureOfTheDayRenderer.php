<?php

use ILIAS\GlobalScreen\Scope\MainMenu\Collector\Renderer\BaseTypeRenderer;
use ILIAS\GlobalScreen\Scope\MainMenu\Factory\isItem;
use ILIAS\UI\Component\Component;

/**
 * Class ilGSDSpecialItemInformation
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class ilGSDPictureOfTheDayRenderer extends BaseTypeRenderer
{

    /**
     * @inheritdoc
     *
     * Just return the UI-Component for your Special type
     */
    public function getComponentForItem(isItem $item) : Component
    {
        global $DIC;

        /**
         * @var $item ilGSDPictureOfTheDay
         */
        $uf = $this->ui_factory;

        return $uf->mainControls()->slate()->legacy(
            "gspod",
            $uf->symbol()->glyph()->eyeopen(),
            $uf->legacy(
                "<style>
					.xdemo_type img {
					width: 100%;
					height: auto;
					}
</style><div class='xdemo_type'>{$DIC->ui()->renderer()->render($item->getPictureOfTheDayAsComponent())}</div>"
            ))->withEngaged(true);
    }
}
