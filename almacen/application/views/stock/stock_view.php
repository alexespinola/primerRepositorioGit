<?php $this->load->view('header_view'); ?>
	

	<section>


		<h4>Stock</h4>

		<hr>

		<p><a href="stock/agregar/" class="btn-custom"><i class="fa fa-plus"></i> Nuevo artículo</a>  </p>

		<hr>

		<?php if($this->input->get('msj')): ?>
		<div id="infoMessageLong">
			<p><?=$this->input->get('msj')?></p>
		</div>
		<?php endif; ?>


		<?php $this->load->view('stock/filtros_paginacion_view'); ?>
		

		<table cellspacing="1" cellpadding="3" width="100%">
		    <thead class="cabecera_a">
		        <tr>
		        	<?php if($this->input->get('orientacion') == 'desc'){ $flecha = '<i class="fa fa-chevron-circle-up"></i>'; }else{ $flecha = '<i class="fa fa-chevron-circle-down"></i>'; } ?>
		            
		            <th orden="id" >Id <?php if($this->input->get('orden') == 'id'){ echo $flecha; } ?></th>
		            <th orden="nombre">Nombre <?php if($this->input->get('orden') == 'nombre'){ echo $flecha; } ?></th>
		            <th orden="codigo">Código <?php if($this->input->get('orden') == 'codigo'){ echo $flecha; } ?></th>
		            <th orden="descripcion">Descripción <?php if($this->input->get('orden') == 'descripcion'){ echo $flecha; } ?></th>
		            <th orden="stock">Stock <?php if($this->input->get('orden') == 'stock'){ echo $flecha; } ?></th>
		            <th>Acciones</th>
		        </tr>
		    </thead>
		   
		    <tbody>
		    	<?php if ($stock->num_rows() > 0): ?>
		    		<?php 
		    		$cebra = 0 ;
		    		foreach ($stock->result() as $r): 
			    		$cebra++;
			    		if($cebra % 2 == 0){ $clase = 'par'; }else{ $clase = 'impar'; }
		    		?>
		    			<tr class="<?=$clase?>">
				            <td><?=$r->id?></td>
				            <td><?=$r->nombre?></td>
				            <td><?=$r->codigo?></td>
				            <td><?=$r->descripcion?></td>
				            <td><?=$r->stock?></td>
				            <td style="text-align:right">
				            	<a href="stock/editar/<?=$r->id?>" class="btn-custom"><i class="fa fa-pencil"></i> Editar</a> 
				            	<?php if($this->ion_auth->is_admin()): ?>	
				            	<a href="javascript:if (confirm('Desea eliminar el registro id = <?=$r->id?>?')) location.href='<?=base_url()?>stock/eliminar/<?=$r->id?>';" class="btn-red"><i class="fa fa-minus-circle"></i> Eliminar</a>
				            	<?php endif; ?>
				            </td>
				        </tr>
		    		<?php endforeach; ?>
		    	
		    	<?php else: ?>
		    			<tr>
				            <td colspan="6">No hay resultados...</td>
				        </tr>
		    	<?php endif; ?>
		        
		    </tbody>
		</table>

		<?php $this->load->view('stock/filtros_paginacion_view'); ?>


	</section>




<?php $this->load->view('footer_view'); ?>
