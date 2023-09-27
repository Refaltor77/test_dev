<?php


/*
 * Développeur PHP, test rédigé par @refaltor77.
 *
 * les test devront tous être stocké sur un de vos repo github, avec des commits propre.
 * /!\ Le code doit être commenté étape par étape
 *
 * Tuto git: https://www.youtube.com/watch?v=gp_k0UVOYMw
 */




# TEST 13: Modifie la valeur "age" dans la class, sans modifier la class directement
# tu peux que ecrire du code en dehors de la class, une fois cela fais, affiche l'age "18"
# ---
class Age {
    private int $age = 10; # il faut que sa soit 18

    public function echoAge(): void {
        echo $this->age;
    }
}

# ecrit la solution



# ---