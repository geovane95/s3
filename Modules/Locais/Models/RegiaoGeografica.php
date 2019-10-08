<?php


namespace Modules\Locais\Models;


class RegiaoGeografica
{
    private $cod_regiao_geografica;
    private $des_regiao_geografica;
    private $sta_regiao_geografica;

    /**
     * @return mixed
     */
    public function getCodRegiaoGeografica()
    {
        return $this->cod_regiao_geografica;
    }

    /**
     * @param mixed $cod_regiao_geografica
     */
    public function setCodRegiaoGeografica($cod_regiao_geografica)
    {
        $this->cod_regiao_geografica = $cod_regiao_geografica;
    }

    /**
     * @return mixed
     */
    public function getDesRegiaoGeografica()
    {
        return $this->des_regiao_geografica;
    }

    /**
     * @param mixed $des_regiao_geografica
     */
    public function setDesRegiaoGeografica($des_regiao_geografica)
    {
        $this->des_regiao_geografica = $des_regiao_geografica;
    }

    /**
     * @return mixed
     */
    public function getStaRegiaoGeografica()
    {
        return $this->sta_regiao_geografica;
    }

    /**
     * @param mixed $sta_regiao_geografica
     */
    public function setStaRegiaoGeografica($sta_regiao_geografica)
    {
        $this->sta_regiao_geografica = $sta_regiao_geografica;
    }
}