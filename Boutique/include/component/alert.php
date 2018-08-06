            <?php
            //  si ($msgKO existe) et ($msgKO n'est pas vide) 
            if(isset($msgKO) && !empty($msgKO)) { 
            ?>
                
            <div class="alert alert-danger" role="alert">
            <?php
            // affichage $msgKO
            echo $msgKO;
            ?>
            </div>
            <?php 
            } ?>
            <?php
            //  si ($msgOK existe) et ($msgOK n'est pas vide) 
            if(isset($msgOK) && !empty($msgOK)) { 
            ?>
            <div class="alert alert-success" role="alert">
            <?php
            // affichage $msgOK
            echo $msgOK;
            ?>
            </div>
            <?php 
            } ?>