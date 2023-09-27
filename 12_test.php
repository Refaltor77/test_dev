<?php


/*
 * Développeur PHP, test rédigé par @refaltor77.
 *
 * les test devront tous être stocké sur un de vos repo github, avec des commits propre.
 * /!\ Le code doit être commenté étape par étape
 *
 * Tuto git: https://www.youtube.com/watch?v=gp_k0UVOYMw
 */




# TEST 12: Résous l'erreur
# ---
class Personne {
    public $nom;
    public $age;

    public function __construct($nom, int $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function direBonjour() {
        echo "Bonjour, je m'appelle " . $this->nom . " et j'ai " . intval($this->age) . " ans.";
    }
}

$personne1 = new Personne("Alice", 30);
$personne2 = new Personne("Bob", 25);

$personne3 = new Personne("Charlie", "quarante");

$personne1->direBonjour();
$personne2->direBonjour();
$personne3->direBonjour();
# ---