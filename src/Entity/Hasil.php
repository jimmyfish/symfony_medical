<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Hasil
{
    private $id;

    private $satuan;

    private $parameter;

    private $metodeAnalisa;

    private $bakuMutu;

    private $hasil;

    private $idPelanggan;

    private $idSampel;

    private $idLab;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSatuan()
    {
        return $this->satuan;
    }

    /**
     * @param mixed $satuan
     */
    public function setSatuan($satuan)
    {
        $this->satuan = $satuan;
    }

    /**
     * @return mixed
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * @param mixed $parameter
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;
    }

    /**
     * @return mixed
     */
    public function getMetodeAnalisa()
    {
        return $this->metodeAnalisa;
    }

    /**
     * @param mixed $metodeAnalisa
     */
    public function setMetodeAnalisa($metodeAnalisa)
    {
        $this->metodeAnalisa = $metodeAnalisa;
    }

    /**
     * @return mixed
     */
    public function getBakuMutu()
    {
        return $this->bakuMutu;
    }

    /**
     * @param mixed $bakuMutu
     */
    public function setBakuMutu($bakuMutu)
    {
        $this->bakuMutu = $bakuMutu;
    }

    /**
     * @return mixed
     */
    public function getHasil()
    {
        return $this->hasil;
    }

    /**
     * @param mixed $hasil
     */
    public function setHasil($hasil)
    {
        $this->hasil = $hasil;
    }

    /**
     * @return mixed
     */
    public function getIdPelanggan()
    {
        return $this->idPelanggan;
    }

    /**
     * @param mixed $idPelanggan
     */
    public function setIdPelanggan($idPelanggan)
    {
        $this->idPelanggan = $idPelanggan;
    }

    /**
     * @return mixed
     */
    public function getIdSampel()
    {
        return $this->idSampel;
    }

    /**
     * @param mixed $idSampel
     */
    public function setIdSampel($idSampel)
    {
        $this->idSampel = $idSampel;
    }

    /**
     * @return mixed
     */
    public function getIdLab()
    {
        return $this->idLab;
    }

    /**
     * @param mixed $idLab
     */
    public function setIdLab($idLab)
    {
        $this->idLab = $idLab;
    }
}
