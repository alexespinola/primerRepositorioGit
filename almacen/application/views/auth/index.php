<?php $this->load->view('header_view'); ?>
	

<section>

<h4><?php echo lang('index_heading');?></h4>
<p><?php echo lang('index_subheading');?></p>

<hr>

<p><?php echo anchor('auth/create_user', '<i class="fa fa-plus"></i> '.lang('index_create_user_link'), 'class="btn-custom"')?>  <?php // echo anchor('auth/create_group', lang('index_create_group_link'))?></p>


<hr>

<div id="infoMessageLong"><?php echo $message;?></div>

<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th><?php echo lang('index_fname_th');?></th>
			<th><?php echo lang('index_lname_th');?></th>
			<th><?php echo lang('index_email_th');?></th>
			<th><?php echo lang('index_groups_th');?></th>
			<th><?php echo lang('index_status_th');?></th>
			<th><?php echo lang('index_action_th');?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user):?>
	
		<tr>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, '<i class="fa fa-check"></i> '.lang('index_active_link'), 'class="btn-custom"') : anchor("auth/activate/". $user->id, '<i class="fa fa-minus-circle"></i> '.lang('index_inactive_link'), 'class="btn-red"');?></td>
			<td style="text-align:right"><?php echo anchor("auth/edit_user/".$user->id, '<i class="fa fa-pencil"></i> Editar', 'class="btn-custom"') ;?></td>
		</tr>
	
	<?php endforeach;?>
	</tbody>

</table>


</section>

<?php $this->load->view('footer_view'); ?>
