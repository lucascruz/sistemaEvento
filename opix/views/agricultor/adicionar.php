<div class="span12">
	<div class="widget stacked">
		<div class="widget-header">
			<i class="icon-check"></i>
			<h3>Adicione uma novo tipo de agricultura</h3>
		</div> <!-- /widget-header -->
		<div class="widget-content">
			<br />
			<form method="post" action="" id="validation-form-tipo-usuario" class="form-horizontal" enctype="multipart/form-data">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="nome" >Nome</label>
						<div class="controls">
							<input type="text" class="input-large" name="nome" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="telefone" >Telefone</label>
						<div class="controls">
							<input type="text" class="input-large telefone" name="telefone" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="cpf" >CPF</label>
						<div class="controls">
							<input type="text" class="input-large cpf" name="cpf" />
						</div>
					</div>

					<?php if( !empty($listaDeTiposDeAgriculturas) ) : ?>
						<div class="control-group">
							<label class="control-label" >Tipos de Agricultura</label>
							<div class="controls form-inline">
								<?php foreach( $listaDeTiposDeAgriculturas as $agricultura ) : ?>
									<label class="checkbox-inline span3">
										<input type="checkbox" name="agriculturas[]" value="<?php echo $agricultura->id; ?>"> <?php echo $agricultura->nome; ?>
									</label>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>

					<div class="form-actions">
						<button type="submit" class="btn btn-danger btn">Salvar</button>&nbsp;&nbsp;
						<a href="<?php echo Configuracao::$baseUrl.'agricultor/listar'.Configuracao::$extensaoPadrao; ?>" class="btn">Cancel</a>
					</div>
				</fieldset>
			</form>
		</div> <!-- /widget-content -->
	</div> <!-- /widget -->					
</div> <!-- /span12 --> 
