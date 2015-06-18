<?php



App::uses('AppController', 'Controller');


class ChamadosController extends AppController 
{

	//public $uses = array();
	//var $scaffold;
	var $components = array("Email");

	public function index()
	{
		$this-> set('title_for_layout', "Chamados ao suporte SIAH");
		
	}

	public function criar($veio = null)
	{
		//echo('veio: '); pr($veio); exit;
		//$this-> set('title_for_layout', " Criar novo chamado");
		if($this-> request-> is("post"))
		{
			//$this-> log("no enviar: ? chamado ");
			//$this-> log("no enviar: chamado: " . print_r($this-> data, 1));
			$chamadoForDB = $this-> data;
			$chamadoForDB['Chamado']['user_id'] = $this-> Auth-> user('id');
			$chamadoForDB['Chamado']['admin_id'] = 1; // Sistema


			$chamadoForDB['Chamadomsg'][0]['user_id'] = $this-> Auth-> user('id');
			
			//$enviou = $this-> Chamado-> save($chamadoForDB);

			//echo('<h1>$this-> Chamado</h1>');
			//pr($this-> Chamado);
			//echo("<h1>chamadoForDB</h1>");
			//pr($chamadoForDB); 
			//exit;

			$data = $this-> request-> data;
			
			$enviou = $this-> Chamado -> saveAll($chamadoForDB);

			//echo("<h1>var_dump($enviou);</h1>");
			//var_dump($enviou);

			//exit;
			
			if($enviou)
			{
				$this-> Session->setFlash('Chamado iniciado'
					, 'default'
					, array('class' => $this-> successMsgClass)); 
				$this-> redirect(array("action"=> "ver", $this-> Chamado-> getLastInsertId()));
			} else
			{
				$this-> Session->setFlash('Houve um erro ao inserir o chamado'
					, 'default'
					, array('class' => $this-> errorMsgClass)); 
			}
			
		} else 
		{
			//request get
		}
	}
	public function ver($id = null) 
	{
        $chamado = $this-> Chamado-> findById($id);
		if (!$chamado)
		{
		    throw new NotFoundException('Chamado não encontrado!');
		}
		$this-> set('title_for_layout', $chamado['Chamado']['titulo']);
		$this->set('chamado', $chamado);
	}

	public function lista_por_cliente()
	{
		$this-> set('title_for_layout', "Listando chamados de ". $this-> Auth-> user('username'));
		$lChamados = $this-> Chamado-> findAllByUserId($this-> Auth-> user('id'));
		$this-> set('lChamados', $lChamados);
	}

	function beforeFilter()
	{
		parent::beforeFilter();

		$this->Auth->allow('index');
	}
}
