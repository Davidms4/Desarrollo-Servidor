<?php
class Player {
    private $Name;
    private $BirthDay;
    private $Country;
    private $Dorsal;
    private $Position;
    private $Goals;
    private $Matches;
    private $Minutes;
    private $YellowCard;
    private $RedCard;
    public function __construct($Name, $BirthDay, $Country, $Dorsal, $Position) {
        $this->Name = $Name;
        $this->BirthDay = $BirthDay;
        $this->Country = $Country;
        $this->Dorsal = $Dorsal;
        $this->Position = $Position;
        $this->Goals = 0;
        $this->Matches = 0;
        $this->Minutes = 0;
        $this->YellowCard = 0;
        $this->RedCard = 0;
    }
    public function Score() { $this->Goals++; }
    public function PlayMinutes(int $min) {
        $this->Minutes += $min;
        $this->Matches++;
    }
    public function AddCard(int $Colour) {
        if ($Colour === 1) { $this->YellowCard++; }
        elseif ($Colour === 2) { $this->RedCard++; }
    }
    public function Age() {
        $nacimiento = new DateTime($this->BirthDay);
        $hoy = new DateTime();
        return $nacimiento->diff($hoy)->y;
    }
    public function Render() {
        echo "<p>Nombre: " . $this->Name . " - Dorsal: " . $this->Dorsal . " - Posición: " . $this->Position . " - Goles: " . $this->Goals . "</p>";
    }
}
