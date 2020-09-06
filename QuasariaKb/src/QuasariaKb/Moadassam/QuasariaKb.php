<?php

namespace QuasariaKb\Moadassam;

use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class QuasariaKb extends PluginBase implements Listener{

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("§aQuasariaKb §eBy Moadassam §aON");
    }
    public function onDisable()
    {
        $this->getLogger()->info("§4QuasariaKb §eBy Moadassam §4OFF");
    }

    public function onDamage(EntityDamageEvent $event){
        if($event instanceof EntityDamageByEntityEvent){
            $event->setKnockBack($event->getKnockBack() * 1.095);
        }
    }

    public function onDamages(EntityDamageEvent $event)
    {

        $player = $event->getEntity();

        if ($player instanceof Player){
            $cause = $event->getCause();
            if ($cause === 4){

                $event->setCancelled();
            }
        }
    }
}