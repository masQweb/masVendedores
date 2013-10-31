<style type="text/css">
	.datagrid table {
	 border-collapse: collapse; text-align: left; width: 100%;
	  } 
	  .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #006699; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 3px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#FFFFFF; font-size: 15px; font-weight: bold; border-left: 1px solid #0070A8; } .datagrid table thead th:first-child { border: none; }
.datagrid table tbody td { color: #00496B; border-left: 1px solid #E1EEF4;font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }.datagrid table tfoot  li { display: inline; }.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #006699;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #006699; color: #FFFFFF; background: none; background-color:#00557F;}
</style>
<h1>Mi Lista de Clientes</h1>  
<a href="<?= base_url('clientes/alta_cliente/'); ?>">Alta Clientes</a>
<a href="<?= base_url('login/logout'); ?>">Cerrar sesión</a>
<div class="datagrid"><table>
<thead>
	<tr>
		<th>Cliente</th>
		<th>Proyecto en Proceso</th>
        <th>Empresa</th>
         <th>Lada 1</th>
        <th>Telefono 1</th>
        <th>Extencion 1</th>
         <th>Lada 2</th>
         <th>Telefono2</th>
          <th>Extencion 2</th>
         <th>Fecha Contacto</th>
         <th>Fecha Visita</th>
          <th>Producto</th>
         <th>Requerimientos</th>
        <th>Editar</th>
        </tr></thead>
<tfoot>
	<tr>
		<td colspan="100%">
			<div id="paging">
				<ul>
					<li>
						<a href="#">
							<span>Previous</span>
						</a>
					</li>
					<li>
						<a href="#" class="active">
							<span>1</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>2</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>3</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>4</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>5</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>Next</span>
						</a>
					</li>
				</ul>
			</div>
		</tr>
	</tfoot>
<tbody>
	<?php
		foreach($aClientes as $aItem){
			//print_r($aItem);
			$aItem->datos_general->get();
			$aItem->producto->get();
			echo '<tr>';
				echo '<td>'.$aItem->nombre.'</td>';
				echo '<td>'.$aItem->status.'</td>';
				echo '<td>'.$aItem->datos_general->nombre.'</td>';
				echo '<td>'.$aItem->datos_general->lada1.'</td>';
				echo '<td>'.$aItem->datos_general->telefono1.'</td>';
                echo '<td>'.$aItem->datos_general->ext1.'</td>';
                echo '<td>'.$aItem->datos_general->lada2.'</td>';
                echo '<td>'.$aItem->datos_general->telefono2.'</td>';
                echo '<td>'.$aItem->datos_general->ext2.'</td>';
                echo '<td>'.$aItem->fecha_c.'</td>';
                echo '<td>'.$aItem->fecha_v.'</td>';
                echo '<td>'.$aItem->requerimiento.'</td>'; echo '<td><a href="'.base_url('requerimientos/editar_requerimiento/'.$aItem->id).'">Ver Requerimiento</a></td>';
                echo '<td>';
                		foreach($aItem->producto->all as $productos){

							echo $productos->nombre;
							echo '<br />';

						}
                echo '</td>';
              echo  '<td><a href="'.base_url('clientes/editar_cliente/'.$aItem->id).'">Editar</a></td>';
				
			echo '</tr>';
		}

				
		/*<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>*/
	?>

</tbody>
</table></div>
