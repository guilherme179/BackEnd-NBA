<?php

namespace App\Models;

final class GeneralModel {
   
    /** 
    * @var int
    */
    private $pos;
    
    /** 
    * @var string
    */
    private $player;
    
    /** 
    * @var string
    */
    private $team;
    
    /** 
    * @var string
    */
    private $total;
    
    /** 
    * @return int
    */
    public function getPos(): int{
        return $this->pos;
    }

    /** 
    * @return string
    */
    public function getPlayer(): string{
        return $this->player;
    }

    /** 
    * @return string
    */
    public function getTeam(): string{
        return $this->team;
    }

    /** 
    * @return string
    */
    public function getTotal(): string{
        return $this->total;
    }

    /** 
    * @param int $pos
    * @return int
    */
    public function setPos(int $pos): GeneralModel{
        $this->pos = $pos;
        return $this;
    }

    /** 
    * @param string $player
    * @return string
    */
    public function setPlayer(string $player): GeneralModel{
       $this->player = $player;
       return $this;
    }

    /** 
    * @param string $team
    * @return string
    */
    public function setTeam(string $team): GeneralModel{
       $this->team = $team;
       return $this;
    }

    /** 
    * @param string $total
    * @return string
    */
    public function setTotal(string $total): GeneralModel{
       $this->total = $total;
       return $this;
    }

}