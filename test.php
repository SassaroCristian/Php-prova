<?php

// Per eseguire un file php nella console si usa il comando: php nomeDelFile.php

// $data = [1, 2, 3, 4, 5];

// for ($i=0; $i < count($data); $i++) { 
//     if ($data[$i] % 2 == 1) {
//         if ($data[$i] == 5) {
//             echo "\ndispari: " . $data[$i];
//             echo "\n\n";
//         } else {
//             echo "\ndispari: " . $data[$i];
//         }
//     } else {
//         echo "\npari: " . $data[$i];
//     }
// }

// Definisco la classe Earth con 3 proprietà
class Earth {

    // Definisco le propietà [public: acessibili da qualsiasi parte del codice; private: acessibili solo all'interno della loro classe]
    public $region;
    private $x;
    private $y;

    // Il costruttore viene utilizzato per inizializzare le proprieta quando si crea una nuova istanza 
    public function __construct($region, $x, $y) {
        $this->region = $region;
        $this->x = $x;
        $this->y = $y;
        
    }

    // Con questa funzione prendo le coordinate
    public function getCordinates() {
        return "\nLa regione è ".$this->region." e le coordinate sono x=".$this->x.", y=".$this->y;
    }  
    // Con questa funzione prendo la regione
    public function getRegion() {
        return "\n\n" . $this->region;
    }

    // Con questa funzione prendo la coordinata minore tra le cordinate di una singola regione
    public function getMinCordinate() {
        return min($this->x, $this->y);
    } 

    // Con questa funzione prende come argomento 3 oggetti e calcola la coordinata minore tra le cordinate minori di ogni singola regione
    public function getGlobalMinCordinate($earth, $earth1, $earth2) {
        $minCordinate = $earth->getMinCordinate();
        $minCordinate1 = $earth1->getMinCordinate();
        $minCordinate2 = $earth2->getMinCordinate();
        return "\n\nCordinata minore tra le regioni: " . min($minCordinate, $minCordinate1, $minCordinate2);
        
    }

    
    // public function __toString() {
    //     return "\n\nRegion=" . $this->getRegion() . " ";
    // }

     
}

// $earth e l'istanza della classe Earth
// "new" permette di creare una nuova istanza di una classe
$earth = new Earth("Friuli", 2.365345, 3.36473);
// echo $earth;
echo $earth->getRegion();
echo $earth->getCordinates();
echo "\n coordinata minore della regione: " . $earth->getMinCordinate();
$minCordinate = $earth->getMinCordinate();



$earth1 = new Earth("Lombardia", 5.365345, 1.36473);
// echo $earth1;
echo $earth1->getRegion();
echo $earth1->getCordinates();
echo "\n coordinata minore della regione: " . $earth1->getMinCordinate();
$minCordinate1 = $earth1->getMinCordinate();





$earth2 = new Earth("Firenze", 7.365345, 9.36473);
// echo $earth2;
echo $earth2->getRegion();
echo $earth2->getCordinates();
echo "\n coordinata minore della regione: " . $earth2->getMinCordinate();
$minCordinate2 = $earth2->getMinCordinate();



// Chiamo la funzione per ricevere la coordinata più piccola e la stampo
$globalMinCordinate = $earth->getGlobalMinCordinate($earth, $earth1, $earth2);
echo $globalMinCordinate;

/*

Voglio che il programma trovi la coordinata più bassa, per ogni istanza
E una volta che hai ottenuto tutti i valori più bassi per ogni istanza, devi trovarmi
il valore più piccolo tra il risultato delle tre istanze

tip: si usa la funzione min() per avere il valore più piccolo


*/