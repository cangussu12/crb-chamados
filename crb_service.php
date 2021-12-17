<?php

class VisitaService {

private $conexao;
private $visita;

public function __construct(Conexao $conexao, Visita $visita) {
    $this->conexao = $conexao->conectar();
    $this->visita = $visita;
    
}

public function recuperar() { //read
    $query = '
    select 
    t.id, s.status, t.visita, t.nome, t.descricao, t.telefone, t.corretor, t.data_visita, t.data_cadastrado 
        from 
    tb_visitas as t
        left join tb_status as s on (t.id_status = s.id) ORDER BY t.id DESC
    ';
    $stmt = $this->conexao->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

?>