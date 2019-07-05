<?php

use ILIAS\GlobalScreen\Scope\MainMenu\Factory\AbstractChildItem;
use ILIAS\UI\Component\Component;

/**
 * Class ilGSDCountCreatedObjects
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class ilGSDCountCreatedObjects extends AbstractChildItem
{

    /**
     * @return Component
     */
    public function getStringWithTheAmountOfCreatedILIASObjectsInThisSessionAsComponent() : Component
    {
        $counter = (int) ilSession::get('xdemo_created_objects');
        global $DIC;
        $factory = $DIC->ui()->factory();

        return $factory->legacy("You created {$counter} Object(s) in this Session!");
    }
}
