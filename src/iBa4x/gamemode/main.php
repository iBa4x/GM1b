<?php
namespace iBa4x\gamemode;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\PluginManager;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\block\Block;

class main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::GREEN . "By iBa4x");
	}
	public function onInteract(PlayerInteractEvent $event){
		$player = $event->getPlayer();
		if($player->hasPermission("gm1b.interact.gamemode")){
		    if($event->getBlock()->getID() === 42){
		    	$player->setGamemode(0);
			$player->sendPopup(TextFormat::BLUE . "Gamemode 0");
		    }
		    if($event->getBlock()->getID() === 20){
		    	$player->setGamemode(1);
		    	$player->sendPopup(TextFormat::AQUA . "Gamemode 1");
		    }
		}
	}
}
