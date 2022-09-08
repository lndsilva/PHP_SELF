<?php 

	class Desktop
		{
		    private $quantidadeDisponivel = 5;

		    public function getQuantidadeDisponivel()
		    {
		        return $this->quantidadeDisponivel;
		    }

		    public function comprar()
		    {
		        /**
		         * Realiza o processo de compra do notebook e atualiza a quantidade disponível
		         */
		        $this->quantidadeDisponivel--;
		    }
		}



		$carrinhoJoao = new Desktop;
		$carrinhoJoao->comprar();
		$notebooksRestantes =  $carrinhoJoao->getQuantidadeDisponivel(); 
		print $notebooksRestantes; // imprime 4

		$carrinhoPedro = new Desktop;
		$carrinhoPedro->comprar();
		$notebooksRestantes =  $carrinhoPedro->getQuantidadeDisponivel(); 
		print $notebooksRestantes; // imprime 4

		$carrinhoPaulo = new Desktop;
		$carrinhoPaulo->comprar();
		$notebooksRestantes =  $carrinhoPaulo->getQuantidadeDisponivel(); 
		print $notebooksRestantes; // imprime 4

 ?>