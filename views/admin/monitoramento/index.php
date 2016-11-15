<?php
if (isset($retorno['mensagem']) && $retorno['mensagem']) :
    $class = $retorno['sucesso'] ? 'alert alert-success' : 'alert alert-danger';
    echo "<div class='{$class}'>{$retorno['mensagem']}</div>";
endif;
?>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="jumbotron">
				<h3 class="text-center">Monitramento</h3>
				<br>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-xs-2 control-label">Nome: </label>
							<div class="col-xs-10">	
								<input type="text" name="nome" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-2 control-label">IP: </label>
							<div class="col-xs-10">
								<input type="text" name="ip" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">Monitorar</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-8">
				<div id="mapa" style="height: 320px; width: 920px;"></div>
			</div>
		</div>
		<br>
		<!--Tabela de monitoramento-->
		<div class="container-fluid">
			<div class="row">
			<h3 class="text-center">Clientes em monitoramento</h3>
			    <table class="table table-bordered table-stripped">
			    	<thead>
			    		<tr>
			    			<th><b>#</b></th>
			    			<th><b>Data Hora</b></th>
			    			<th><b>Cliente</b></th>
			    			<th><b>Número</b></th>
			    			<th><b>IP</b></th>
			    			<th><b>Eventos</b></th>
			    			<th><b>Status</b></th>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		<tr>
			    			<td></td>
			    			<td></td>
			    			<td></td>
			    			<td></td>
			    			<td></td>
			    			<td></td>
			    			<td></td>
			    		</tr>
			    	</tbody>
			    </table>
			</div>
		</div>
			<!--Fim-->

		<!--Tabela de quarentena-->
		<div class="container-fluid">
			<div class="row">
			<h3 class="text-center">Clientes em quarentena</h3>
			    <table class="table table-bordered table-stripped">
			    	<thead>
			    		<tr>
			    			<th><b>#</b></th>
			    			<th><b>Data Hora</b></th>
			    			<th><b>Cliente</b></th>
			    			<th><b>Número</b></th>
			    			<th><b>IP</b></th>
			    			<th><b>Eventos</b></th>
			    			<th><b>Status</b></th>
			    			<th><b>Resolvido</b></th>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		<tr>
			    			<td></td>
			    			<td></td>
			    			<td></td>
			    			<td></td>
			    			<td></td>
			    			<td>
				    			<a role="button" data-toggle="collapse" href="#eventos" aria-expanded="false" aria-controls="eventos">
								  x
								</a>
			    			</td>
			    			<td></td>
			    			<td><a href="#"><span class="glyphicon glyphicon-ok"></span></a></td>
			    		</tr>
			    	</tbody>
			    </table>
			</div>
		</div>
			<!--Fim-->

		<!--Tabela que listará todos os eventos-->
		<div class="row">
			<div class="collapse" id="eventos">
				<div class="well">
					<table class="table table-bordered table-stripped">
						<thead>
							<tr>
								<th><b>Seq</b></th>
								<th><b>Data Hora</b></th>
								<th><b>Cliente</b></th>
								<th><b>Número</b></th>
								<th><b>IP</b></th>
								<th><b>Hora início</b></th>
								<th><b>Hora fim</b></th>
								<th><b>Valor do intervalo</b></th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!--Fim-->
	</div>
	<br>
			

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDMHvCmWwSu_6qwIlf0KzkFfh61wbE092c&amp;sensor=false"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/dist/js/mapa.js"></script>
	
	