<?php

use ILIAS\GlobalScreen\MainMenu\AbstractChildItem;
use ILIAS\UI\Component\Component;

/**
 * Class ilGSDPictureOfTheDay
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class ilGSDPictureOfTheDay extends AbstractChildItem {

	/**
	 * @return Component
	 */
	public function getPictureOfTheDayAsComponent(): Component {
		global $DIC;
		$factory = $DIC->ui()->factory();

		return $factory->image()->responsive(
			"https://source.unsplash.com/random",
			$DIC->user()->getLogin()
		);
	}
}
