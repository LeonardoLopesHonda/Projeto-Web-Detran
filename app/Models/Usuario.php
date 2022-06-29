<?php

class Usuario {
    private $db;

    public function __construct()
    {
       $this->db = new Database();
    }

    public function armazenar($dados){
        $this->db->query("INSERT INTO tb_usuarios(nome, email, senha) VALUES (:nome, :email, :senha)");
        
        $this->db->bind("nome",$dados['nome']);
        $this->db->bind("email",$dados['email']);
        $this->db->bind("senha",$dados['senha']);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }

    public function checarEmail($email){
        $this->db->query("SELECT email FROM tb_usuarios WHERE email = :em");
        $this->db->bind(":em",$email);

        if($this->db->resultados()): 
            return true;
        else:
            return false;
        endif;
    }

    public function checarLogin($email, $senha)
    {
        $this->db->query("SELECT * FROM tb_usuarios WHERE email = :em");
        $this->db->bind(":em", $email);
        
        if ($this->db->resultado()): 
            $resultado = $this->db->resultado();
      
            if(md5($senha) == $resultado->senha): 
                return $resultado;
            else:
                return false;
            endif;
        else:
            return false;
        endif;        
    }
}