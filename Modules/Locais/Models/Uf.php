<?php


namespace Modules\Locais\Models;


class Uf
{
    private $cod_uf;
    private $des_uf;
    private $sta_uf;
    private $regiao_geografica;

    /**
     * @return mixed
     */
    public function getRegiaoGeografica()
    {
        return $this->regiao_geografica;
    }

    /**
     * @param mixed $regiao_geografica
     */
    public function setRegiaoGeografica($regiao_geografica)
    {
        $this->regiao_geografica = $regiao_geografica;
    }

    /**
     * @return mixed
     */
    public function getCodUf()
    {
        return $this->cod_uf;
    }

    /**
     * @param mixed $cod_uf
     */
    public function setCodUf($cod_uf)
    {
        $this->cod_uf = $cod_uf;
    }

    /**
     * @return mixed
     */
    public function getDesUf()
    {
        return $this->des_uf;
    }

    /**
     * @param mixed $des_uf
     */
    public function setDesUf($des_uf)
    {
        $this->des_uf = $des_uf;
    }

    /**
     * @return mixed
     */
    public function getStaUf()
    {
        return $this->sta_uf;
    }

    /**
     * @param mixed $sta_uf
     */
    public function setStaUf($sta_uf)
    {
        $this->sta_uf = $sta_uf;
    }
}