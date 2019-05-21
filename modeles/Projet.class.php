<?php


class Projet {

    public function rechercherTous() {
        $aResultats = array();
        $aDossiers = scandir("../");

        for ($i = 0; $i < count($aDossiers); $i++) {
            if ($aDossiers[$i] != "." && $aDossiers[$i] != ".." && strpos($aDossiers[$i], '.') == false) {
                $aProjet = array(
                    "sLien" => "http://" . $_SERVER['SERVER_ADDR'] . "/" . $aDossiers[$i],
                    "sNomProjet" => $aDossiers[$i]
                );
                array_push($aResultats, $aProjet);
            }
        }

        if (count($aResultats) > 0) {
            return $aResultats;
        } else {
            return false;
        }

    }

}