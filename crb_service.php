<?php

class CategoriaService {

    private $conexao;

    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao->conectar();
        
    }

    public function recuperar() { //read
        $query = "SELECT * FROM categorias_post ORDER BY id";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function subcategoria() { //read
        $query = "SELECT * FROM sub_categorias_post ORDER BY id";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
}

?>