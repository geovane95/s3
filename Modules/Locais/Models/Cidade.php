<?php


namespace Modules\Locais\Models;


class Cidade
{
    private $cod_cidade;
    private $des_cidade;
    private $sta_cidade;
    private $uf;

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @return mixed
     */
    public function getCodCidade()
    {
        return $this->cod_cidade;
    }

    /**
     * @param mixed $cod_cidade
     */
    public function setCodCidade($cod_cidade)
    {
        $this->cod_cidade = $cod_cidade;
    }

    /**
     * @return mixed
     */
    public function getDesCidade()
    {
        return $this->des_cidade;
    }

    /**
     * @param mixed $des_cidade
     */
    public function setDesCidade($des_cidade)
    {
        $this->des_cidade = $des_cidade;
    }

    /**
     * @return mixed
     */
    public function getStaCidade()
    {
        return $this->sta_cidade;
    }

    /**
     * @param mixed $sta_cidade
     */
    public function setStaCidade($sta_cidade)
    {
        $this->sta_cidade = $sta_cidade;
    }
}