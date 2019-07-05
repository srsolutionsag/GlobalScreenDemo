<?php

use ILIAS\GlobalScreen\Scope\MainMenu\Factory\AbstractChildItem;
use ILIAS\UI\Component\Legacy\Legacy;

/**
 * Class ilGSDCountCreatedObjects
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class ilGSDCountCreatedObjects extends AbstractChildItem
{

    /**
     * @return Legacy
     */
    public function getStringWithTheAmountOfCreatedILIASObjectsInThisSessionAsComponent() : Legacy
    {
        $counter = (int) ilSession::get('xdemo_created_objects');
        global $DIC;
        $factory = $DIC->ui()->factory();

        return $factory->legacy("You created {$counter} Object(s) in this Session!");
    }
}
