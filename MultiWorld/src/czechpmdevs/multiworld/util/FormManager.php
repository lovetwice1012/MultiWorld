<?php

declare(strict_types=1);

namespace czechpmdevs\multiworld\util;

use czechpmdevs\multiworld\api\WorldGameRulesAPI;
use czechpmdevs\multiworld\api\WorldManagementAPI;
use czechpmdevs\multiworld\form\CustomForm;
use czechpmdevs\multiworld\MultiWorld;
use pocketmine\form\Form;
use pocketmine\Player;

/**
 * Class FormManager
 * @package czechpmdevs\multiworld\util
 */
class FormManager {

    /** @var MultiWorld $plugin */
    public $plugin;

    /**
     * FormManager constructor.
     * @param MultiWorld $plugin
     */
    public function __construct(MultiWorld $plugin) {
        $this->plugin = $plugin;
    }

    
        $customForm = new CustomForm("World Manager");
        $customForm->mwId = $data;
        $customForm->addLabel("Teleport to level");
        $customForm->addDropdown("Level", WorldManagementAPI::getAllLevels());
        $player->sendForm($customForm);
     

    /**
     * @param Player $player
     * @param mixed $data
     * @param CustomForm $form
     */
    public function handleCustomFormResponse(Player $player, $data, CustomForm $form) {
        if($data === null) return;
                $this->plugin->getServer()->dispatchCommand(new ConsoleCommandSender(), "mw tp " . WorldManagementAPI::getAllLevels()[$data[1]]);               
    }
}
