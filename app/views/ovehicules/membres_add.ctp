
<div class="ovehicules form">

<?php
$this->set('title_for_layout', "Ajouter un article");
 
// Appel des fichiers javascript nécessaires
echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));
echo $this->Html->script('ckfinder/ckfinder', array('inline' => false));
?>

	<?php echo $form->create('Ovehicule',array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Nouveau véhicule'); ?></legend>
	<?php
		echo $this->Form->input('parcs_id', array('label'=>'Id du parc auquel appartient le véhicule '));
		echo $this->Form->input('marque');
		echo $this->Form->input('annee');
		echo $this->Form->input('model');
		echo $this->Form->input('carrosserie');
		echo $this->Form->input('puissance');
		echo $this->Form->input('couleur');
		echo $this->Form->input('finission');
		echo $this->Form->input('circulation');
		echo $this->Form->input('prix');
		echo $this->Form->input('boite');
		echo $this->Form->input('motorisation');
		echo $this->Form->input('kilometrage');
		
		echo "Options supplémentaires";
		'&nbsp';
		echo $this->Form->textarea('infoptions');
		echo $this->Ck->replace('infoptions');
		
		echo "Commentaires possibles";
		echo $this->Form->textarea('commentaire');
		echo $this->Ck->replace('commentaire');
		
		echo $form->input('filename', array('type' => 'file','label'=>'Inclure une image'));
		echo $this->Form->input('envente', array('label'=>'Hors vente '));
		echo $this->Form->input('entransfert', array('label'=>'En transfert '));
		echo $this->Form->input('vendu', array('label'=>'Vente close '));

	?>

	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ovehicules', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients', true), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>