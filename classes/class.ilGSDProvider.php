<?php

use ILIAS\GlobalScreen\Collector\MainMenu\Information\TypeInformation;
use ILIAS\GlobalScreen\Collector\MainMenu\Information\TypeInformationCollection;
use ILIAS\GlobalScreen\Identification\IdentificationInterface;
use ILIAS\GlobalScreen\Provider\StaticProvider\AbstractStaticPluginMainMenuProvider;

/**
 * Class ilGSDProvider
 *
 * This is the relevant Class to provide own Types and Main Menu Items for
 * ILIAS >= 5.4.
 *
 * Please see the PHPDoc of the methods below.
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class ilGSDProvider extends AbstractStaticPluginMainMenuProvider {

	/**
	 * @inheritdoc
	 *
	 * This Method return all TopItems for the MainMenu.
	 * Make sure you use the same Identifier for all subitems as well,
	 * @see getParentIdentifier().
	 * Using $this->if-> (if stands for IdentificationFactory) you will already
	 * get a PluginIdentification for your Plugin-Instance.
	 */
	public function getStaticTopItems(): array {
		$dic = $this->dic;
		$item = $this->mainmenu->topParentItem($this->getParentIdentifier())->withTitle("GlobalScreen Demo")->withPosition(999)->withVisibilityCallable(
			function () use ($dic) {
				return ($dic->user()->getId() != ANONYMOUS_USER_ID);
			}
		);

		return [$item];
	}


	/**
	 * Accordingly this method provides the Subitems.
	 * By using $this->mainmenu->custom(...) you can even use your own Types.
	 * Make sure you provide special information and rendering for won types if
	 * needed, @see provideTypeInformation()
	 *
	 * @inheritdoc
	 */
	public function getStaticSubItems(): array {
		$picture_of_the_day = $this->mainmenu->custom(ilGSDPictureOfTheDay::class, $this->if->identifier('xdemo_pod'))
			->withParent($this->getParentIdentifier());

		$count_created_objects = $this->mainmenu->custom(ilGSDCountCreatedObjects::class, $this->if->identifier('xdemo_counter'))
			->withParent($this->getParentIdentifier());

		return [$picture_of_the_day, $count_created_objects];
	}


	/**
	 * @inheritdoc
	 *
	 * We provide a new TypeCollection for our Types, two in this case.
	 * Type-Information can have a special Renderer in it, in this case
	 * ilGSDPictureOfTheDayRenderer and ilGSDCountCreatedObjectsRenderer
	 */
	public function provideTypeInformation(): TypeInformationCollection {
		$c = new TypeInformationCollection();

		$c->add(new TypeInformation(ilGSDPictureOfTheDay::class, "Picture of the Day", new ilGSDPictureOfTheDayRenderer()));
		$c->add(new TypeInformation(ilGSDCountCreatedObjects::class, "Count created Objects", new ilGSDCountCreatedObjectsRenderer()));

		return $c;
	}


	/**
	 * @return IdentificationInterface
	 */
	private function getParentIdentifier(): IdentificationInterface {
		return $this->if->identifier('xdemo');
	}
}
