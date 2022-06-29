<?php
    class Paginas extends Controller{

        public function index(){
            $dados =    ['titulo'=>'Pagina inicial',
             'descricao'=>'Curso de PHP7'];

            $this->view('paginas/home', $dados);
        }

      /*  public function sobre($id,$idCidade){
            
        }*/
    }
?>