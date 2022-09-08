<?php

class Notebook
    {
        private static $quantidadeDisponivel = 5;

        public function getQuantidadeDisponivel()
        {
            return self::$quantidadeDisponivel;
        }

        public function comprar()
        {
            /**
             * Realiza o processo de compra do notebook e atualiza quantidade disponivel
             */
            self::$quantidadeDisponivel--;
        }
    }

    $carrinhoJoao = new Notebook;
    $carrinhoJoao->comprar();
    $notebooksRestantes =  $carrinhoJoao->getQuantidadeDisponivel(); 
    print $notebooksRestantes; // imprime 4

    $carrinhoPedro = new Notebook;
    $carrinhoPedro->comprar();
    $notebooksRestantes =  $carrinhoPedro->getQuantidadeDisponivel(); 
    print $notebooksRestantes; // imprime 3

    $carrinhoPaulo = new Notebook;
    $carrinhoPaulo->comprar();
    $notebooksRestantes =  $carrinhoPaulo->getQuantidadeDisponivel(); 
    print $notebooksRestantes; // imprime 2

    $carrinhoJoao->comprar();
    $notebooksRestantes =  $carrinhoJoao->getQuantidadeDisponivel(); 
    print $notebooksRestantes; // imprime 1

    $carrinhoPedro->comprar();
    $notebooksRestantes =  $carrinhoPedro->getQuantidadeDisponivel(); 
    print $notebooksRestantes; // imprime 0