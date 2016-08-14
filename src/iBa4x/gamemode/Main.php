<?php
namespace iBa4x\gamemode;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\block\Block;

class main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvent($this, $this);
		$this->getLogger()->info(TextFormat::GREEN . "By iBa4x");
	}
	public function onTap(PlayerInteractEvent $event){
		$player = $event->getPlayer();
		if($player->hasPermission(gm1b.tap.gm)){
		    if($event->getBlock()->get(Block::DIRT)){
		    	$player->setGamemode(0);
			    $player->sendPopup(TextFormat::BLUE . "set Gamemode 0");
		    }
		    if($event->getBlock()->get(Block::GLASS)){
		    	$player->setGamemode(1);
		    	$player->sendPopup(TextFormat::AQUA . "set Gamemode 1");
		    }
		}
	}
}
