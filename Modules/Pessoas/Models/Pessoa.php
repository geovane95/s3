<?php


namespace Modules\Pessoas\Models;


class Pessoa
{
    private $cod_pessoa;
    private $nom_pessoa_primeiro;
    private $nom_pessoa_ultimo;
    private $dt_cadastro;
    private $dt_contratacao;
    private $dt_demissao;
    private $usuario;
    private $endereco;
    private $endereco_entrega;
    private $contato;
    private $sub_bu;
    private $superior;

    /**
     * @return mixed
     */
    public function getCodPessoa()
    {
        return $this->cod_pessoa;
    }

    /**
     * @param mixed $cod_pessoa
     */
    public function setCodPessoa($cod_pessoa)
    {
        $this->cod_pessoa = $cod_pessoa;
    }

    /**
     * @return mixed
     */
    public function getNomPessoaPrimeiro()
    {
        return $this->nom_pessoa_primeiro;
    }

    /**
     * @param mixed $nom_pessoa_primeiro
     */
    public function setNomPessoaPrimeiro($nom_pessoa_primeiro)
    {
        $this->nom_pessoa_primeiro = $nom_pessoa_primeiro;
    }

    /**
     * @return mixed
     */
    public function getNomPessoaUltimo()
    {
        return $this->nom_pessoa_ultimo;
    }

    /**
     * @param mixed $nom_pessoa_ultimo
     */
    public function setNomPessoaUltimo($nom_pessoa_ultimo)
    {
        $this->nom_pessoa_ultimo = $nom_pessoa_ultimo;
    }

    /**
     * @return mixed
     */
    public function getDtCadastro()
    {
        return $this->dt_cadastro;
    }

    /**
     * @param mixed $dt_cadastro
     */
    public function setDtCadastro($dt_cadastro)
    {
        $this->dt_cadastro = $dt_cadastro;
    }

    /**
     * @return mixed
     */
    public function getDtContratacao()
    {
        return $this->dt_contratacao;
    }

    /**
     * @param mixed $dt_contratacao
     */
    public function setDtContratacao($dt_contratacao)
    {
        $this->dt_contratacao = $dt_contratacao;
    }

    /**
     * @return mixed
     */
    public function getDtDemissao()
    {
        return $this->dt_demissao;
    }

    /**
     * @param mixed $dt_demissao
     */
    public function setDtDemissao($dt_demissao)
    {
        $this->dt_demissao = $dt_demissao;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getEnderecoEntrega()
    {
        return $this->endereco_entrega;
    }

    /**
     * @param mixed $endereco_entrega
     */
    public function setEnderecoEntrega($endereco_entrega)
    {
        $this->endereco_entrega = $endereco_entrega;
    }

    /**
     * @return mixed
     */
    public function getContato()
    {
        return $this->contato;
    }

    /**
     * @param mixed $contato
     */
    public function setContato($contato)
    {
        $this->contato = $contato;
    }

    /**
     * @return mixed
     */
    public function getSubBu()
    {
        return $this->sub_bu;
    }

    /**
     * @param mixed $sub_bu
     */
    public function setSubBu($sub_bu)
    {
        $this->sub_bu = $sub_bu;
    }

    /**
     * @return mixed
     */
    public function getSuperior()
    {
        return $this->superior;
    }

    /**
     * @param mixed $superior
     */
    public function setSuperior($superior)
    {
        $this->superior = $superior;
    }
}