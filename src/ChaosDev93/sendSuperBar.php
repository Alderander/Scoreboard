<?php

namespace ChaosDev93;

use pocketmine\scheduler\Task;
use pocketmine\utils\TextFormat as Color;

class sendSuperBar extends Task
{
	
	public function __construct($plugin)
    {

        $this->plugin = $plugin;
        

    }

    public function onRun($tick)
    {
        $all = $this->plugin->getServer()->getOnlinePlayers();
        $test = count($this->plugin->getServer()->getOnlinePlayers());
        $motd = $this->plugin->getServer()->getMotd();
        $max = $this->plugin->getServer()->getMaxPlayers();
        $h = $this->plugin->getHour();
        $m = $this->plugin->getMin();
        $s = $this->plugin->getSek();
        $t = str_repeat(" ", 60);
        $anni = $this->plugin->anni;
        
        
        if ($this->plugin->anni === 1) {
        	
        	$this->plugin->anni = 2;
        	
        } else if ($this->plugin->anni === 2) {
        	
        	$this->plugin->anni = 3;
        	
        } else if ($this->plugin->anni === 3) {
        	
        	$this->plugin->anni = 1;
        	
        	
        }
        
        foreach ($all as $player) {
        	$name = $player->getName();
        	$this->config = $this->plugin->getConfig();
            $this->config = new Config("/home/Datenbank/PurePerms/Spieler/" . strtolower($name) . ".yml", Config::YAML);
            if ($anni === 1) {
            	
            	$player->sendTip(
                                               "\n\n\n\n\n\n\n\n\n\n\n\n\n\n" . 
                                               $t . Color::BOLD . $motd . Color::RESET . "\n" .
                                               $t . Color::BOLD . "Name" . Color::GRAY . ": " . Color::RESET . Color::BLUE . $player->getName() . Color::RESET . "\n" . 
                                               $t . Color::BOLD . "Rang" . Color::GRAY . ": " . Color::RESET . Color::DARK_BLUE . $this->config->get("group") . Color::RESET . "\n" . 
                                               $t . Color::BOLD . "Spieler" . Color::GRAY . ": " . Color::RESET . Color::GREEN . $test . Color::GRAY . " / " . Color::RED . $max . Color::RESET . "\n" . 
                                               $t . Color::BOLD . "Zeit" . Color::GRAY . ": " . Color::RESET . Color::YELLOW . $h . ":" . $m . ":" . $s . Color::RESET . "\n" . 
                                               $t . Color::BOLD . "Ping" . Color::GRAY . ": " . Color::RESET . Color::YELLOW . $player->getPing() . Color::RESET . "\n" . str_repeat("\n", 24));
            	
            } else if ($anni === 2) {
            	
            	$player->sendTip(
                                               "\n\n\n\n\n\n\n\n\n\n\n\n\n\n" . 
                                               $t . Color::BOLD . $motd . Color::RESET . "\n" . 
                                               $t . Color::BOLD . "Name" . Color::GRAY . ": " . Color::RESET . Color::BLUE . $player->getName() . Color::RESET . "\n" .
                                               $t . Color::BOLD . "Rang" . Color::GRAY . ": " . Color::RESET . Color::DARK_BLUE . $this->config->get("group") . Color::RESET . "\n" . 
                                               $t . Color::BOLD . "Spieler" . Color::GRAY . ": " . Color::RESET . Color::GREEN . $test . Color::GRAY . " / " . Color::RED . $max . Color::RESET . "\n" .
                                               $t . Color::BOLD . "Zeit" . Color::GRAY . ": " . Color::RESET . Color::YELLOW . $h . ":" . $m . ":" . $s . Color::RESET . "\n" . 
                                               $t . Color::BOLD . "Ping" . Color::GRAY . ": " . Color::RESET . Color::YELLOW . $player->getPing() . Color::RESET . "\n" . str_repeat("\n", 24));
            	
            } else if ($anni === 3) {
            	
            	$player->sendTip(
                                               "\n\n\n\n\n\n\n\n\n\n\n\n\n\n" . 
                                               $t . Color::BOLD . $motd . Color::RESET . "\n" . 
                                               $t . Color::BOLD . "Name" . Color::GRAY . ": " . Color::RESET . Color::BLUE . $player->getName() . Color::RESET . "\n" .
                                               $t . Color::BOLD . "Rang" . Color::GRAY . ": " . Color::RESET . Color::DARK_BLUE . $this->config->get("group") . Color::RESET . "\n" . 
                                               $t . Color::BOLD . "Spieler" . Color::GRAY . ": " . Color::RESET . Color::GREEN . $test . Color::GRAY . " / " . Color::RED . $max . Color::RESET . "\n" .
                                               $t . Color::BOLD . "Zeit" . Color::GRAY . ": " . Color::RESET . Color::YELLOW . $h . ":" . $m . ":" . $s . Color::RESET . "\n" . 
                                               $t . Color::BOLD . "Ping" . Color::GRAY . ": " . Color::RESET . Color::YELLOW . $player->getPing() . Color::RESET . "\n" . str_repeat("\n", 24));
            	
            }
           }
          }
         }
