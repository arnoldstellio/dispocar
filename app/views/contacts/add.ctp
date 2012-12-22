<div class="contacts form">
<?php echo $this->Form->create('Contact');?>
	<fieldset>
		<legend><?php __('Vos informations'); ?></legend>
	<?php
		echo $this->Form->input('departement',array('label'=>'Département'));
		echo $this->Form->input('prenom',array('label'=>'Prénom'));
		echo $this->Form->input('nom');
		echo $this->Form->input('adresse');
		echo $this->Form->input('ville');
		echo $this->Form->input('mail');
		echo $this->Form->input('tel',array('label'=>'Téléphone'));
		echo $this->Form->input('date',array('label'=>''));

	?>
	</fieldset>
	
	<fieldset>
	            <legend><?php __('Votre méssage'); ?></legend>
	       		<?php echo $this->Form->input('message',array('label'=>''));?>
	</fieldset>

<?php echo $this->Form->end(__('Envoyer', true));?>
</div>
