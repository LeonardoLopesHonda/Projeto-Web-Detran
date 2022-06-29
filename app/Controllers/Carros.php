<?php
class Carros extends Controller{

    public function __construct()
    {
        if (!Sessao::estaLogado()) :
            URL::redirecionar('usuarios/login');
        endif;
        // acrescentado
        $this->carroModel = $this->model('Carro');
    }
    
    public function index(){
        $this->view('carros/index');
    }

    public function cadastrar()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'nome' => trim($formulario['nome']),
                'placa' => trim($formulario['placa']),
                // acrescentado
                'usuario_id' => $_SESSION['usuario_id']
            ];

            if (in_array("", $formulario)) :

                if (empty($formulario['nome'])) :
                    $dados['nome_erro'] = 'Preencha o campo nome';
                endif;

                if (empty($formulario['placa'])) :
                    $dados['placa_erro'] = 'Preencha o campo placa';
                endif;

            else :
                    var_dump($dados);
                   // echo 'pode cadastrar o carro';
                   if ($this->carroModel->armazenar($dados)) :
                    Sessao::mensagem('carro', 'Carro cadastrado com sucesso');
                    URL::redirecionar('carros');
                else :
                    die("Erro ao armazenar carro no banco de dados");
                endif;

            endif;
        else :
            $dados = [
                'nome' => '',
                'placa' => '',
                'nome_erro' => '',
                'placa_erro' => ''
            ];

        endif;


        $this->view('carros/cadastrar', $dados);
    }



}