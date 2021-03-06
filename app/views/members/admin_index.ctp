<div class="members index">
	<h2>Espace concessionnaire</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('nom');?></th>
			<th><?php echo $this->Paginator->sort('prenom');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('numero');?></th>
			<th><?php echo $this->Paginator->sort('ville');?></th>
			<th><?php echo $this->Paginator->sort('tel');?></th>
			<th><?php echo $this->Paginator->sort('parcs_id');?></th>

			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($members as $member):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $member['Member']['id']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['email']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['nom']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['prenom']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['created']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['numero']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['ville']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['tel']; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($member['Parc']['numeroparc'], array('controller' => 'parcs', 'action' => 'view', $member['Parc']['numeroparc'])); ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $member['Member']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $member['Member']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Member', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Parcs', true), array('controller' => 'parcs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parcs', true), array('controller' => 'parcs', 'action' => 'add')); ?> </li>
	</ul>
</div>