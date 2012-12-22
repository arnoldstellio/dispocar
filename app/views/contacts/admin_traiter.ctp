<div class="contacts form">
<?php echo $this->Form->create('Contact');?>
	<fieldset>
		<legend><?php __('Etat du mail'); ?></legend>
	<?php
		echo $this->Form->input('etat',array('label'=>'Email traité'));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enregistrer', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Supprimer', true), array('action' => 'delete', $this->Form->value('Contact.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Contact.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Liste Mails', true), array('action' => 'index'));?></li>
	</ul>
</div>