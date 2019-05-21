<?php


class VueReglages {
    public function afficherTous(){
        $sHtml = "
            <main>
                <div class='nav-options'>
                    <a href='index.php?s=reglages' class='actif'>Tous</a>
                </div>
        
                <section>
        
                    <div class='form'>
                        <h3>Serveur MySQL / PhpMyAdmin</h3>
                        <div class='flex-container form-row'>
                            <div class='form-input'>
                                <label for='sIdentifiantMysql'>Identifiant</label>
                                <input type='text' id='sIdentifiantMysql' name='sIdentifiantMysql' placeholder='Identifiant MySQL...' readonly value='root'>
                            </div>
        
                            <div class='form-input'>
                                <label for='sMotDePasseMysql'>Mot de passe</label>
                                <div class='form-password'>
                                    <input type='password' id='sMotDePasseMysql' name='sMotDePasseMysql' placeholder='Mot de passe MySQL...' value='Hockey31'>
                                    <button data-see='false' id='btnMdpMysql'><i class='fas fa-eye'></i></button>
                                </div>                             
                            </div>
                        </div>
                    </div>
        
                </section>
            </main>
            <script src='js/reglages.js'></script>
        ";

        echo $sHtml;
    }
}