<?php


namespace Modules\Pessoas\Models;


class Usuario
{
    private $cod_usuario;
    private $usuario;
    private $senha;
    private $idioma_sistema;
    private $perfil;
    private $sta_usuario;

    /**
     * @return mixed
     */
    public function getCodUsuario()
    {
        return $this->cod_usuario;
    }

    /**
     * @param mixed $cod_usuario
     */
    public function setCodUsuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;
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
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getIdiomaSistema()
    {
        return $this->idioma_sistema;
    }

    /**
     * @param mixed $idioma_sistema
     */
    public function setIdiomaSistema($idioma_sistema)
    {
        $this->idioma_sistema = $idioma_sistema;
    }

    /**
     * @return mixed
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * @param mixed $perfil
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }

    /**
     * @return mixed
     */
    public function getStaUsuario()
    {
        return $this->sta_usuario;
    }

    /**
     * @param mixed $sta_usuario
     */
    public function setStaUsuario($sta_usuario)
    {
        $this->sta_usuario = $sta_usuario;
    }
}