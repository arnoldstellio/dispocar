<div class="clients index">
	<h2><?php __('Clients véhicules occasions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nom');?></th>
			<th><?php echo $this->Paginator->sort('prenom');?></th>
			<th><?php echo $this->Paginator->sort('raisonsociale');?></th>
			<th><?php echo $this->Paginator->sort('ville');?></th>
			<th><?php echo $this->Paginator->sort('tel');?></th>
			<th><?php echo $this->Paginator->sort('Négociations');?></th>
			<th><?php echo $this->Paginator->sort('Véhicule');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($clientvos as $clientvo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $clientvo['Clientvo']['id']; ?>&nbsp;</td>
		<td><?php echo $clientvo['Clientvo']['nom']; ?>&nbsp;</td>
		<td><?php echo $clientvo['Clientvo']['prenom']; ?>&nbsp;</td>
		<td><?php echo $clientvo['Clientvo']['raisonsociale']; ?>&nbsp;</td>
		<td><?php echo $clientvo['Clientvo']['ville']; ?>&nbsp;</td>
		<td><?php echo $clientvo['Clientvo']['tel']; ?>&nbsp;</td>
	    <td><?php echo $clientvo['Clientvo']['nego']=='0'?'En cours':'clôturées'; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientvo['Ovehicule']['id'], array('controller' => 'Ovehicules', 'action' => 'view', $clientvo['Ovehicule']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Voir', true), array('action' => 'view', $clientvo['Clientvo']['id'])); ?>
			<?php echo $this->Html->link(__('Editer', true), array('action' => 'edit', $clientvo['Clientvo']['id'])); ?>
			<?php echo $this->Html->link(__('Supprimer', true), array('action' => 'delete', $clientvo['Clientvo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $clientvo['Clientvo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nouveau client', true), array('action' => 'add')); ?></li>
	</ul>
</div>