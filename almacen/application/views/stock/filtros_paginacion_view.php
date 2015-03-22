		 

		 <form style=" float: right; margin-top: 6px;" action="stock<?='?'.$this->input->server('QUERY_STRING')?>" method="get">
			<div style="display:none;">
			<label for="orden">Orden <i class="fa fa-arrows-v"></i> </label>
			<select name="orden" id="orden" onchange="this.form.submit()">
				<option value="" <?php if($this->input->get('orden') == ''){ echo "selected";} ?>>Seleccionar...</option>
				<option value="id" <?php if($this->input->get('orden') == 'id'){ echo "selected";} ?>>Id</option>
				<option value="nombre" <?php if($this->input->get('orden') == 'nombre'){ echo "selected";} ?>>Nombre</option>
				<option value="codigo" <?php if($this->input->get('orden') == 'codigo'){ echo "selected";} ?>>Código</option>
				<option value="descripcion" <?php if($this->input->get('orden') == 'descripcion'){ echo "selected";} ?>>Descripción</option>
				<option value="stock" <?php if($this->input->get('orden') == 'stock'){ echo "selected";} ?>>Stock</option>
			</select>

			<select name="orientacion" id="orientacion" onchange="this.form.submit()">
				<option value="asc" <?php if($this->input->get('orientacion') == 'asc'){ echo "selected";} ?>>&uarr;</option>
				<option value="desc" <?php if($this->input->get('orientacion') == 'desc'){ echo "selected";} ?>>&darr;</option>
			</select>
		 	</div>
			<label for="buscar"><i class="fa fa-search"></i> </label>
			<select name="buscar" id="buscar" onchange="this.form.submit()">
				<option value="" <?php if($this->input->get('buscar') == ''){ echo "selected";} ?>>Seleccionar...</option>
				<option value="id" <?php if($this->input->get('buscar') == 'id'){ echo "selected";} ?>>Id</option>
				<option value="nombre" <?php if($this->input->get('buscar') == 'nombre'){ echo "selected";} ?>>Nombre</option>
				<option value="codigo" <?php if($this->input->get('buscar') == 'codigo'){ echo "selected";} ?>>Código</option>
				<option value="descripcion" <?php if($this->input->get('buscar') == 'descripcion'){ echo "selected";} ?>>Descripción</option>
				<option value="stock" <?php if($this->input->get('buscar') == 'stock'){ echo "selected";} ?>>Stock</option>
			</select>

			<input type="text" name="termino" id="termino" value="<?=$this->input->get('termino') ?>" />

		</form>

		<div class="pagination">
		<?=$this->pagination->create_links();?>
		</div>