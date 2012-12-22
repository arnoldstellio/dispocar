<div class="contacts index">
	<h2><?php __('Emails reçus');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('réçu le');?></th>
			<th><?php echo $this->Paginator->sort('département');?></th>
			<th><?php echo $this->Paginator->sort('prénom');?></th>
			<th><?php echo $this->Paginator->sort('nom');?></th>
			<th><?php echo $this->Paginator->sort('ville');?></th>
			<th><?php echo $this->Paginator->sort('tel');?></th>
			<th><?php echo $this->Paginator->sort('etat');?></th>

			<th class="actions"><?php __('');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($contacts as $contact):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $contact['Contact']['id']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['date']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['departement']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['prenom']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['nom']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['ville']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['tel']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['etat']=='0'?'non traité':' traité'; ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('Voir', true), array('action' => 'view', $contact['Contact']['id'])); ?>
			<?php echo $this->Html->link(__('Traiter', true), array('action' => 'traiter', $contact['Contact']['id'])); ?>
			<?php echo $this->Html->link(__('Supprimer', true), array('action' => 'delete', $contact['Contact']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contact['Contact']['id'])); ?>
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
