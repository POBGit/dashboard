<?php


class Controleur
{

    /**
     * Gérer le site
     */
    public function gererSite()
    {

        try {

            $aMenu = array(
                array("sNom" => "Projets", "sLien" => "projets", "sIcone" => "fas fa-chart-pie-alt"),
                array("sNom" => "Outils", "sLien" => "outils", "sIcone" => "fas fa-wrench"),
                array("sNom" => "Fichiers", "sLien" => "fichiers", "sIcone" => "fas fa-folders"),
                array("sNom" => "Réglages", "sLien" => "reglages", "sIcone" => "fas fa-sliders-h")
            );

            if (isset($_GET['s']) == "") {
                $_GET['s'] = "";
            }

            /* ===== NAV ===== */
            $oVueSite = new VueSite();

            switch ($_GET['s']) {
                case "outils":
                    $oVueSite->afficherNav($aMenu, "outils");
                    break;
                case "fichiers":
                    $oVueSite->afficherNav($aMenu, "fichiers");
                    break;
                case "reglages":
                    $oVueSite->afficherNav($aMenu, "reglages");
                    break;
                default:
                case "projets":
                    $oVueSite->afficherNav($aMenu, "projets");
                    break;
            }


            /* ===== CORPS ===== */
            echo "<div>";

            switch ($_GET['s']) {
                case "nouveau":
                    $this->gererNouveauProjet();
                    break;
                case "outils":
                    $this->gererOutils();
                    break;
                case "fichiers":
                    $this->gererFichiers();
                    break;
                case "reglages":
                    $this->gererReglages();
                    break;
                default:
                case "projets":
                    $this->gererProjet();
                    break;
            }

            echo "</div>";

        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "<p>";
        }

    }

    /**
     * Gérer l'affichage de la page projets
     */
    public function gererProjet()
    {
        try {
            $oVueProjet = new VueProjet();
            $oVueSite = new VueSite();
            $oProjet = new Projet();
            $aProjets = $oProjet->rechercherTous();


            $oVueSite->afficherHeader("Projets");
            $oVueProjet->afficherTous($aProjets);

        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "<p>";
        }
    }

    /**
     * Gérer l'affichage de la page nouveau projet
     */
    public function gererNouveauProjet()
    {
        try {
            $oVueProjet = new VueProjet();
            $oVueSite = new VueSite();

            $oVueSite->afficherHeader("Nouveau projet");

            if (isset($_POST['cmd']) == false) {
                $oVueProjet->afficherAjouter();
            } else {
                $oProjet = new Projet();

            }

        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "<p>";
        }
    }

    /**
     * Gérer l'affichage de la page outils
     */
    public function gererOutils()
    {
        try {
            $oVueSite = new VueSite();
            $oVueOutils = new VueOutils();
            $aOutils = array(
                array("sLien" => "http://" . $_SERVER['SERVER_ADDR'] . "/phpmyadmin/", "sNomOutil" => "PHP My Admin"),
                array("sLien" => "https://fonts.google.com/", "sNomOutil" => "Google Fonts"),
                array("sLien" => "http://" . $_SERVER['SERVER_ADDR'] . "/sql-designer/", "sNomOutil" => "SQL Designer"),
                array("sLien" => "https://dribbble.com/", "sNomOutil" => "Dribbble"),
                array("sLien" => "https://www.hostpapa.ca/tableau-de-bord/Login/", "sNomOutil" => "Hostpapa")
            );

            $oVueSite->afficherHeader("Outils");
            $oVueOutils->afficherTous($aOutils);

        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "<p>";
        }
    }

    /**
     * Gérer l'affichage de la page fichiers
     */
    public function gererFichiers()
    {
        try {
            $oVueSite = new VueSite();

            $oVueSite->afficherHeader("Fichiers");
        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "<p>";
        }
    }

    /**
     * Gérer l'affichage de la page réglages
     */
    public function gererReglages()
    {
        try {
            $oVueSite = new VueSite();
            $oVueReglages = new VueReglages();

            $oVueSite->afficherHeader("Réglages");
            $oVueReglages->afficherTous();

        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "<p>";
        }
    }

}