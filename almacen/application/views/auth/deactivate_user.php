<?php $this->load->view('header_view'); ?>
<h4><?php echo lang('deactivate_heading');?></h4>
<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
<hr>

<?php echo form_open("auth/deactivate/".$user->id);?>

  <p>
  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
    <input type="radio" name="confirm" value="yes" checked="checked" />
    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
    <input type="radio" name="confirm" value="no" />
  </p>

  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>

  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'),'class="btn-custom"');?></p>

<?php echo form_close();?>

<?php $this->load->view('footer_view'); ?>