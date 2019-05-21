<?php


class VueSite {

    public function afficherHeader($sNomSection){
        $sHtml = "
            <header>
                <h1>". $sNomSection ."</h1>
            </header>
        ";
        echo $sHtml;
    }

    public function afficherNav($aLiens, $sActif){
        $sHtml = "
            <nav>
                <div id='logo'>
                    <i class='fas fa-cog'></i>
                </div>
                ";

        for($i=0; $i<count($aLiens); $i++){
            $sClasse = "";

            if($aLiens[$i]['sLien'] == $sActif){
                $sClasse = "actif";
            }

            $sHtml .= "
                <div class='menu-list'>
                    <a href='index.php?s=". $aLiens[$i]['sLien'] ."' class='menu-section-head ". $sClasse ."'>
                        <i class='". $aLiens[$i]['sIcone'] ."'></i>
                        <h2>". $aLiens[$i]['sNom'] ."</h2>
                    </a>
                </div>";
        }

        $sHtml .= "
            </nav>
        ";

        echo $sHtml;
    }


}