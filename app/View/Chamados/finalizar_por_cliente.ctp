
<!--
View/Chamados/finaliza_por_cliente.ctp
-->


<div class="container">
	<script>
	$(document).ready(function(){
	        $("#atendimento").addClass("active");
	});
	</script>
	<h1>
		<?php
		echo($this-> request-> data['Chamado']['titulo']);
		?>
	</h1>

	<?php
	//pr($this-> request-> data);

	echo $this-> Form-> create('Chamado', array('type'=> "post"));	
	?>

		<?php
		echo $this-> Form-> hidden('id');
		?>

		<?php
		//echo $this-> Form-> input('titulo', array('label'=> "Título"));
		?>

		<?php
		echo $this-> Form-> input('nota', array('label'=> "Dê uma nota para o atendimento", 'min'=> 0, 'max'=> 10, 'step'=> 1, 'placeholder'=> "número de 0 a 10", 'required'));
		?>

		<?php
		//echo $this-> Form-> input('satisfação', array('label'=> "O seu grau de satisfação com este atendimento é", 'type'=> "text"));
		//echo $this-> Form-> input('Chamado.satisfacao', array('type'=> NULL));
		$sizes = array
			(
				array(
					'name'=> 'selecione',
					'value' => '',
	                'disabled' => TRUE,
	                'selected' => TRUE
	            ), 
				'ruim'=> 'ruim', 
				'regular'=> 'regular', 
				'bom'=> 'bom', 
				'ótimo'=> 'ótimo'
			);

		echo $this-> Form-> input
		(
			'Chamado.satisfacao',
			array('type' => 'select', 'options' => $sizes, 'label'=> "Satisfação", 'required')
		);
		?>



		<?php
		//echo $this-> Form-> input('Chamadomsg.0.msg', array());
		?>

        <button type="submit" class="btn btn-primary">
        	Finalizar chamado
        </button>

	<?php

	echo $this->Form->end();
	?>

</div>
