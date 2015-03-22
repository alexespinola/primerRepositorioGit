<?php $this->load->view('header_view'); ?>
	

	<section>


		<h4>Editar artículo id: <?=$articulo->row('id'); ?> del Stock</h4>

		<hr>

		<?php if(validation_errors() != ''): ?>
		<div id="infoMessageLong">
			<?=validation_errors()?>
		</div>
		<?php endif; ?>

		<?php if($this->input->get('msj')): ?>
		<div id="infoMessageLong">
			<p><?=$this->input->get('msj')?></p>
		</div>
		<?php endif; ?>


		<form action="stock/editar/<?=$articulo->row('id'); ?>" method="post">
			
				<p>
				<label for="nombre">Nombre</label><br>
				<input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?=set_value('nombre', $articulo->row('nombre')); ?>">
				</p>

				<p>
				<label for="codigo">Código</label><br>
				<input type="text" id="codigo" name="codigo" placeholder="Código" value="<?=set_value('codigo', $articulo->row('codigo')); ?>">
				</p>

				<p>
				<label for="descripcion">Descripción</label><br>
				<textarea id="descripcion" name="descripcion" maxlength="255" ><?=set_value('descripcion', $articulo->row('descripcion')); ?></textarea>
				</p>

				<p>
				<label for="stock">Stock</label><br>
				<input type="text" id="stock" name="stock" placeholder="Stock" value="<?=set_value('stock', $articulo->row('stock')); ?>">
				</p>
		
			    <button type="submit" class="btn-b">Actualizar</button>

		</form>





	</section>




<?php $this->load->view('footer_view'); ?>
