<?php


namespace Modules\Pessoas\Models;


class Contato
{
    private $cod_contato;
    private $email;
    private $email_secundario;
    private $telefones;

    /**
     * @return mixed
     */
    public function getCodContato()
    {
        return $this->cod_contato;
    }

    /**
     * @param mixed $cod_contato
     */
    public function setCodContato($cod_contato)
    {
        $this->cod_contato = $cod_contato;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmailSecundario()
    {
        return $this->email_secundario;
    }

    /**
     * @param mixed $email_secundario
     */
    public function setEmailSecundario($email_secundario)
    {
        $this->email_secundario = $email_secundario;
    }

    /**
     * @return mixed
     */
    public function getTelefones()
    {
        return $this->telefones;
    }

    /**
     * @param mixed $telefones
     */
    public function setTelefones($telefones)
    {
        $this->telefones = $telefones;
    }
}