<?php
    class Carro
    {
        private $db;
        public function __construct() {
            $this->db = new Database();
        }

        public function armazenar($dados) {
            $this->db->query("INSERT INTO tb_carro(usuario_id, nome, placa) VALUES (:usuario_id, :nome, :placa)");

            $this->db->bind("usuario_id", $dados['usuario_id']);
            $this->db->bind("nome", $dados['nome']);
            $this->db->bind("placa", $dados['placa']);

            if ($this->db->executa()) :
                return true;
            else :
                return false;
            endif;
        }


    }