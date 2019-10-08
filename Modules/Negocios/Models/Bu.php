<?php


namespace Modules\Negocios\Models;


class Bu
{
    private $cod_bu;
    private $des_bu;
    private $sta_bu;

    /**
     * @return mixed
     */
    public function getCodBu()
    {
        return $this->cod_bu;
    }

    /**
     * @param mixed $cod_bu
     */
    public function setCodBu($cod_bu)
    {
        $this->cod_bu = $cod_bu;
    }

    /**
     * @return mixed
     */
    public function getDesBu()
    {
        return $this->des_bu;
    }

    /**
     * @param mixed $des_bu
     */
    public function setDesBu($des_bu)
    {
        $this->des_bu = $des_bu;
    }

    /**
     * @return mixed
     */
    public function getStaBu()
    {
        return $this->sta_bu;
    }

    /**
     * @param mixed $sta_bu
     */
    public function setStaBu($sta_bu)
    {
        $this->sta_bu = $sta_bu;
    }
}