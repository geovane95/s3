<?php


namespace Modules\Locais\Models;


class Rede
{
    private $cod_rede;
    private $des_rede;
    private $sta_rede;

    /**
     * @return mixed
     */
    public function getCodRede()
    {
        return $this->cod_rede;
    }

    /**
     * @param mixed $cod_rede
     */
    public function setCodRede($cod_rede)
    {
        $this->cod_rede = $cod_rede;
    }

    /**
     * @return mixed
     */
    public function getDesRede()
    {
        return $this->des_rede;
    }

    /**
     * @param mixed $des_rede
     */
    public function setDesRede($des_rede)
    {
        $this->des_rede = $des_rede;
    }

    /**
     * @return mixed
     */
    public function getStaRede()
    {
        return $this->sta_rede;
    }

    /**
     * @param mixed $sta_rede
     */
    public function setStaRede($sta_rede)
    {
        $this->sta_rede = $sta_rede;
    }
}