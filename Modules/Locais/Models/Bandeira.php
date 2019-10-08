<?php


namespace Modules\Locais\Models;


class Bandeira
{
    private $cod_bandeira;
    private $des_bandeira;
    private $sta_bandeira;
    private $rede;

    /**
     * @return mixed
     */
    public function getRede()
    {
        return $this->rede;
    }

    /**
     * @param mixed $rede
     */
    public function setRede($rede)
    {
        $this->rede = $rede;
    }

    /**
     * @return mixed
     */
    public function getCodBandeira()
    {
        return $this->cod_bandeira;
    }

    /**
     * @param mixed $cod_bandeira
     */
    public function setCodBandeira($cod_bandeira)
    {
        $this->cod_bandeira = $cod_bandeira;
    }

    /**
     * @return mixed
     */
    public function getDesBandeira()
    {
        return $this->des_bandeira;
    }

    /**
     * @param mixed $des_bandeira
     */
    public function setDesBandeira($des_bandeira)
    {
        $this->des_bandeira = $des_bandeira;
    }

    /**
     * @return mixed
     */
    public function getStaBandeira()
    {
        return $this->sta_bandeira;
    }

    /**
     * @param mixed $sta_bandeira
     */
    public function setStaBandeira($sta_bandeira)
    {
        $this->sta_bandeira = $sta_bandeira;
    }
}