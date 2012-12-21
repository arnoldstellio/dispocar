<div class="clientvos view">
<h2><?php  __('Clientvo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $clientvo['Clientvo']['id']; ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $clientvo['Clientvo']['nom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prenom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $clientvo['Clientvo']['prenom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Raisonsociale'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $clientvo['Clientvo']['raisonsociale']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ville'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $clientvo['Clientvo']['ville']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $clientvo['Clientvo']['tel']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id véhicule'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($clientvo['Ovehicule']['id'], array('controller' => 'Ovehicule', 'action' => 'view', $clientvo['Ovehicule']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Négociations '); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
		<td> <?php echo $clientvo['Clientvo']['nego']=='0'?'En cours':'clôturées'; ?>&nbsp;</td>
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Commentaires'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $clientvo['Clientvo']['note']; ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editer client', true), array('action' => 'edit', $clientvo['Clientvo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Supprimer client', true), array('action' => 'delete', $clientvo['Clientvo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $clientvo['Clientvo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste clients', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau client', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
