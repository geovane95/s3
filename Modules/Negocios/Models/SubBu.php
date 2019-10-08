<?php


namespace Modules\Negocios\Models;


class SubBu
{
    private $cod_sub_bu;
    private $des_sub_bu;
    private $sta_sub_bu;
    private $cod_bu;

    /**
     * @return mixed
     */
    public function getCodSubBu()
    {
        return $this->cod_sub_bu;
    }

    /**
     * @param mixed $cod_sub_bu
     */
    public function setCodSubBu($cod_sub_bu)
    {
        $this->cod_sub_bu = $cod_sub_bu;
    }

    /**
     * @return mixed
     */
    public function getDesSubBu()
    {
        return $this->des_sub_bu;
    }

    /**
     * @param mixed $des_sub_bu
     */
    public function setDesSubBu($des_sub_bu)
    {
        $this->des_sub_bu = $des_sub_bu;
    }

    /**
     * @return mixed
     */
    public function getStaSubBu()
    {
        return $this->sta_sub_bu;
    }

    /**
     * @param mixed $sta_sub_bu
     */
    public function setStaSubBu($sta_sub_bu)
    {
        $this->sta_sub_bu = $sta_sub_bu;
    }

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
}