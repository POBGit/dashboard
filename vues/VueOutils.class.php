<?php


class VueOutils {

    public function afficherTous($aOutils, $sMsg = ""){
        $sHtml = "
            <main>
                <div class='nav-options'>
                    <a href='index.php?s=outils' class='actif'>Tous</a>
                </div>
        
                <section>
        
                    <div id='liste-projet'>";

        if(count($aOutils) > 0){

            $sHtml .= "
                        <div id='liste-projet-head'>
                            <p>Nom de l'outil</p>
                            <p></p>
                        </div>
                        <div>";

            for($i=0; $i<count($aOutils); $i++){
                $sHtml .= "<a href='". $aOutils[$i]['sLien'] ."' class='projet-item'>
                                <p>". $aOutils[$i]['sNomOutil'] ."</p>
                                <p><i class='fas fa-ellipsis-h'></i></p>
                            </a>";
            }
        }
        else{
            $sHtml .= "<p>Aucun outil pour l'instant.</p>";
        }

        $sHtml .= "
                        </div>
                    </div>
        
                </section>
            </main>
        ";

        echo $sHtml;
    }

}