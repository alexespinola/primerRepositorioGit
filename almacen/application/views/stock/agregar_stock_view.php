<?php $this->load->view('header_view'); ?>
	

	<section>


		<h4>Agregar artículo al Stock</h4>

		<hr>

		<?php if(validation_errors() != ''): ?>
		<div id="infoMessageLong">
			<?=validation_errors()?>
		</div>
		<?php endif; ?>


		<form action="stock/agregar" method="post">
			
				<p>
				<label for="nombre">Nombre</label><br>
				<input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?=set_value('nombre'); ?>">
				</p>

				<p>
				<label for="codigo">Código</label><br>
				<input type="text" id="codigo" name="codigo" placeholder="Código" value="<?=set_value('codigo'); ?>">
				</p>

				<p>
				<label for="descripcion">Descripción</label><br>
				<textarea id="descripcion" name="descripcion" maxlength="255" ><?=set_value('descripcion'); ?></textarea>
				</p>

				<p>
				<label for="stock">Stock</label><br>
				<input type="text" id="stock" name="stock" placeholder="Stock" value="<?=set_value('stock'); ?>">
				</p>
		
			    <button type="submit" class="btn-b">Guardar</button>

		</form>





	</section>




<?php $this->load->view('footer_view'); ?>
