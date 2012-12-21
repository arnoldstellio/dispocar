<div class="nvehicules view">
<h2><?php  __('Informations véhicules | neuf');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nvehicule['Nvehicule']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Marque'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nvehicule['Nvehicule']['marque']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Model'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nvehicule['Nvehicule']['model']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Carrosserie'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nvehicule['Nvehicule']['carrosserie']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Puissance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nvehicule['Nvehicule']['puissance']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Couleur'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nvehicule['Nvehicule']['couleur']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Finission'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nvehicule['Nvehicule']['finission']; ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __(''); ?></dt>
		
		
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			
				<br/>
			<?php
			echo $this->Html->image('lesimages/nvehicules/'.$nvehicule['Nvehicule']['filename'], array('width'=>'200','height'=>'200','alt'=>'photo'));
			?>
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prix'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nvehicule['Nvehicule']['prix']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Boite'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nvehicule['Nvehicule']['boite']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Motorisation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nvehicule['Nvehicule']['motorisation']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parcs'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($nvehicule['Parc']['id'], array('controller' => 'parcs', 'action' => 'view', $nvehicule['Parc']['id'])); ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Commentaire'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nvehicule['Nvehicule']['commentaire']; ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Informations supplémentaires'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nvehicule['Nvehicule']['infoptions']; ?>
			&nbsp;
		</dd>
		
		
		<h3>Les différents statuts </h3>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Statut'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $nvehicule['Nvehicule']['envente']=='0'?'En vente':'Hors vente'; ?>&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etat de transfert '); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
		<td> <?php echo $nvehicule['Nvehicule']['entransfert']=='0'?'Hors transfert':'En transfert'; ?>&nbsp;</td>
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Disponibilité'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $nvehicule['Nvehicule']['vendu']=='0'?'Oui':'Vente close'; ?> &nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editer', true), array('action' => 'edit', $nvehicule['Nvehicule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Supprimer ', true), array('action' => 'delete', $nvehicule['Nvehicule']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nvehicule['Nvehicule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste véhicules ', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau véhicule', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste client', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau client', true), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Accueil', true), array('controller' => 'members', 'action' => 'home')); ?> </li>

	</ul>
</div>
