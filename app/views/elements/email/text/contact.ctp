Merci de nous avoir contact�. Voici la copie de ce que va recevoir notre administrateur :
 
Date : <?php e(date('d/m/Y H:i')); ?>
Envoy� par : <?php e($data['Contact']['nom'].' '.$data['Contact']['prenom']); ?>
Adresse email : <?php e($data['Contact']['email']); ?>
Message : <?php e($data['Contact']['message']); ?>