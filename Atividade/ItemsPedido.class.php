<?php
class ItemsPedido{
    
    private $idItemPedido;
    private $ordem;
    private $idPedido;
    private $idEstoque;
    private $qtdItem;
    private $dtDevolucacao;
    private $motivoDevolucacao;
    

    

    public function getIdItemPedido(){
        return $this->idItemPedido;
    }

    public function setIdItemPedido($idItemPedido){
        $this->idItemPedido = $idItemPedido;
    }

    public function getOrdem(){
        return $this->ordem;
    }

    public function setOrdem($ordem){
        $this->ordem = $ordem;
    }

    public function getIdPedido(){
        return $this->idPedido;
    }

    public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
    }

    public function getIdEstoque(){
        return $this->idEstoque;
    }

    public function setIdEstoque($idEstoque){
        $this->idEstoque = $idEstoque;
    }

    public function getQtdItem(){
        return $this->qtdItem;
    }

    public function setQtdItem($qtdItem){
        $this->qtdItem = $qtdItem;
    }

    public function getDtDevolucacao(){
        return $this->dtDevolucacao;
    }

    public function setDtDevolucacao($dtDevolucacao){
        $this->dtDevolucacao = $dtDevolucacao;
    }

    public function getMotivoDevolucacao(){
        return $this->motivoDevolucacao;
    }

    public function setMotivoDevolucacao($motivoDevolucacao){
        $this->motivoDevolucacao = $motivoDevolucacao;
    }

}
?>
       