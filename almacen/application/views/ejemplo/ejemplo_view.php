<?php $this->load->view('header_view'); ?>
	

	<section>


		<h4>Ejemplo view</h4>

		<hr>


		<table id="example" class="display" cellspacing="0" width="100%">
		    <thead>
		        <tr>
		            <th>Id</th>
		            <th>email</th>
		        </tr>
		    </thead>
		 
		   
		 
		    <tbody>
		    	<?php if ($usuarios->num_rows() > 0): ?>
		    	
		    		<?php foreach ($usuarios->result() as $r): ?>
		    	
		    			
		    			<tr>
				            <td><?=$r->id?></td>
				            <td><?=$r->email?></td>
				        </tr>
		    	
		    		<?php endforeach; ?>
		    	
		    	<?php else: ?>

		    			<tr>
				            <td colspan="2">No hay resultados...</td>
				        </tr>
		    		
		    	<?php endif; ?>
		        
		    </tbody>
		</table>

	</section>


<?php $this->load->view('footer_view'); ?>
