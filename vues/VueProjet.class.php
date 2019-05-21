<?php


class VueProjet {

    /**
     * Afficher tous les projets sur le serveur
     * @param $aProjets
     * @param string $sMsg
     */
    public function afficherTous($aProjets, $sMsg = ""){

        $sHtml = "
            <main>
                <div class='nav-options'>
                    <a href='index.php?s=projets' class='actif'>Tous</a>
                    <a href='index.php?s=nouveau'>Créer</a>
                </div>
        
                <section>
        
                    <div id='liste-projet'>";

        if(count($aProjets) > 0){

        $sHtml .= "
                        <div id='liste-projet-head'>
                            <p>Nom du projet</p>
                            <p></p>
                        </div>
                        <div>";

            for($i=0; $i<count($aProjets); $i++){
                if($aProjets[$i]['sNomProjet'] != "sql-designer"){
                    $sHtml .= "<a href='". $aProjets[$i]['sLien'] ."' class='projet-item'>
                                <p>". $aProjets[$i]['sNomProjet'] ."</p>
                                <p><i class='fas fa-ellipsis-h'></i></p>
                            </a>";
                }
            }
        }
        else{
            $sHtml .= "<p>Aucun projet pour l'instant.</p>";
        }

        $sHtml .= "
                        </div>
                    </div>
        
                </section>
            </main>
        ";

        echo $sHtml;
    }


    /**
     * Afficher le formulaire pour créer un nouveau projet
     * @param string $sMsg
     */
    public function afficherAjouter($sMsg = ""){
        $sHtml = "
            <main>
                <div class='nav-options'>
                    <a href='index.php?s=projets'>Tous</a>
                    <a href='index.php?s=nouveau' class='actif'>Créer</a>
                </div>
        
                <section>
        
                    <form action='index.php' method='post'>
                        <div class='flex-container form-row'>
                            <div class='form-input'>
                                <label for='sNomProjet'>Nom du projet</label>
                                <input type='text' id='sNomProjet' name='sNomProjet' placeholder='Nom du projet...'>
                            </div>
        
                            <div class='form-input'>
                                <label for='sNomProjet'>Nom du projet</label>
                                <input type='text' id='sNomProjet' name='sNomProjet' placeholder='Nom du projet...'>
                            </div>
                        </div>
        
                        <div class='flex-container form-row'>
                            <div class='form-input'>
                                <label for='sNomProjet'>Nom du projet</label>
                                <input type='text' id='sNomProjet' name='sNomProjet' placeholder='Nom du projet...'>
                            </div>
        
                            <div class='form-input'>
                                <label for='sNomProjet'>Nom du projet</label>
                                <input type='text' id='sNomProjet' name='sNomProjet' placeholder='Nom du projet...'>
                            </div>
                        </div>
        
                        <input type='submit' name='cmd' value='Créer'>
                        <a href='index.php?s=nouveau'><i class='fas fa-trash'></i></a>
                    </form>
        
                </section>
            </main>
        ";

        echo $sHtml;
    }

}