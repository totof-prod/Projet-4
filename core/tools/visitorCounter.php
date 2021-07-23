<?php


namespace core\tools;


class visitorCounter
{
    public function visitor(){
        if(file_exists('../app/entity/compteur_visites.txt'))
    {
        $compteur_f = fopen('../app/entity/compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f);
    }
    else
    {
        $compteur_f = fopen('../app/entity/compteur_visites.txt', 'a+');
        $compte = 0;
    }
        if(!isset($_SESSION['compteur_de_visite']))
        {
            $_SESSION['compteur_de_visite'] = 'visite';
            $compte++;
            fseek($compteur_f, 0);
            fputs($compteur_f, $compte);
        }
        fclose($compteur_f);
    }

    public function readVisitor(){

            if(file_exists('../app/entity/compteur_visites.txt'))
            {
                $compteur_f = fopen('../app/entity/compteur_visites.txt', 'r+');
                $compte = fgets($compteur_f);
            }
            else
            {
                $compte = 'bug';
            }

            echo $compte;


    }


}
