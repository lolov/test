<?php 
    
    function lire_dossier(){
    
$tab = scandir ('/home/lolo/daec' );
foreach($tab as $k => $v){
    if($k != '.' && $k != '..'){
     
        $handle = @fopen("/home/lolo/daec/".$v, "r");
        if ($handle) {
            $affiche = false;
            $n = 0;
            while (($buffer = fgets($handle, 4096)) !== false) {
                if(!$affiche){
                    if(strpos($buffer, "#UP") !== false) {
                        $affiche = true;
                    }
                }
               if($affiche){
                   $n++;
               }
                
                if($affiche && $n > 1){
                    
                     if((strpos($buffer, "#DOWN") === false) &&  (strpos($buffer, "INSERT") === false)
                         &&   (strpos($buffer, "UPDATE") === false) 
                             
                             ){
                    
                 
                      echo $buffer; echo '<br>';
                     }
                }
                   
                    
                  
                    } 
               
            }
            if (!feof($handle)) {
                echo "Erreur: fgets() a échoué\n";
            }
            fclose($handle);
        }
    }
    }
    
    echo 'sdfsdfsdf';
    
 