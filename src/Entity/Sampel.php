<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Sampel
{
    private $id;

    private $lokasiPengambilan;

    private $alamat;

    private $petugasPengambil;

    private $tanggal;

    private $kondisi;

    private $jenisSampel;

    private $parameter;

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
    public function getLokasiPengambilan()
    {
        return $this->lokasiPengambilan;
    }

    /**
     * @param mixed $lokasiPengambilan
     */
    public function setLokasiPengambilan($lokasiPengambilan)
    {
        $this->lokasiPengambilan = $lokasiPengambilan;
    }

    /**
     * @return mixed
     */
    public function getAlamat()
    {
        return $this->alamat;
    }

    /**
     * @param mixed $alamat
     */
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    /**
     * @return mixed
     */
    public function getPetugasPengambil()
    {
        return $this->petugasPengambil;
    }

    /**
     * @param mixed $petugasPengambil
     */
    public function setPetugasPengambil($petugasPengambil)
    {
        $this->petugasPengambil = $petugasPengambil;
    }

    /**
     * @return mixed
     */
    public function getTanggal()
    {
        return $this->tanggal;
    }

    /**
     * @param mixed $tanggal
     */
    public function setTanggal($tanggal)
    {
        $this->tanggal = $tanggal;
    }

    /**
     * @return mixed
     */
    public function getKondisi()
    {
        return $this->kondisi;
    }

    /**
     * @param mixed $kondisi
     */
    public function setKondisi($kondisi)
    {
        $this->kondisi = $kondisi;
    }

    /**
     * @return mixed
     */
    public function getJenisSampel()
    {
        return $this->jenisSampel;
    }

    /**
     * @param mixed $jenisSampel
     */
    public function setJenisSampel($jenisSampel)
    {
        $this->jenisSampel = $jenisSampel;
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
