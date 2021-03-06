﻿<div class="ovehicules view">
<h2><?php  __('Informations véhicules | occasion');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Marque'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['marque']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Model'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['model']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Année'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['annee']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Carrosserie'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['carrosserie']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Puissance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['puissance']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Couleur'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['couleur']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Finission'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['finission']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prix'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['prix']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Boite'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['boite']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Motorisation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['motorisation']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Kilometrage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['kilometrage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Circulation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['circulation']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parcs'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ovehicule['Parc']['id'], array('controller' => 'parcs', 'action' => 'view', $ovehicule['Parc']['id'])); ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ville'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ovehicule['Parc']['ville'], array('controller' => 'parcs', 'action' => 'view', $ovehicule['Parc']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __(''); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			
				<br/>
			<?php
			echo $this->Html->image('lesimages/ovehicules/'.$ovehicule['Ovehicule']['filename'], array('width'=>'200','height'=>'200','alt'=>'photo'));
			?>
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Commentaire'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['commentaire']; ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Options'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ovehicule['Ovehicule']['infoptions']; ?>
			&nbsp;
		</dd>
		
		<h3>Les différents statuts </h3>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Statut'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $ovehicule['Ovehicule']['envente']=='0'?'En vente':'Hors vente'; ?>			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etat de transfert '); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
		<td> <?php echo $ovehicule['Ovehicule']['entransfert']=='0'?'Hors transfert':'En transfert'; ?>&nbsp;</td>
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Disponibilité'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $ovehicule['Ovehicule']['vendu']=='0'?'Oui':'Vente close'; ?> &nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editer ', true), array('action' => 'edit', $ovehicule['Ovehicule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Supprimer', true), array('action' => 'delete', $ovehicule['Ovehicule']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ovehicule['Ovehicule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste véhicules occasions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau véhicule', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste clients', true), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Accueil', true), array('controller' => 'members', 'action' => 'home')); ?> </li>

	</ul>
</div>
