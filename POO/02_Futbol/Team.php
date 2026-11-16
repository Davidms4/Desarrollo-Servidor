<?php
class Team {
    private $Name;
    private $Players;
    private $Matches;
    private $Won;
    private $Lost;
    private $Tie;
    private $ScoreGoals;
    private $ConcededGoals;
    public function __construct($Name) {
        $this->Name = $Name;
        $this->Players = [];
        $this->Matches = 0;
        $this->Won = 0;
        $this->Lost = 0;
        $this->Tie = 0;
        $this->ScoreGoals = 0;
        $this->ConcededGoals = 0;
    }
    public function SignPlayer(Player $jugador) {
        $this->Players[] = $jugador;
    }
    public function Render() {
        echo "<h2>" . $this->Name . "</h2>";
        foreach ($this->Players as $jugador) {
            $jugador->Render();
        }
    }
}
