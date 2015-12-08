namespace PalkiaDude\K-K;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
class Main extends PluginBase{

public function onEnable(){
 $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN . "Dead-End Minigame by PalkiaDude!");
        }
        public function onCommand(CommandSender $sender, Command $command, $label, array $args){
           switch($command->getName()) {
            case "knockback":
                $sender->getPlayer()->addPlayer();
                return true;
            case "knockbackremove":
            $sender->getPlayer()->removePlayer();
            return false;
                }
                public function Knackback(EntityDamageByEntityEvent $event){
                if($event->getDamager->getInventory->getItemInHand(258)){
                $event->setKnockBack(2);
                }
                }
        
