<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Transaksi
{
    private $id;

    private $biaya;

    private $tanggalPengambilanHasil;

    private $idSampel;

    private $idPelanggan;

    private $idHasil;

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
    public function getBiaya()
    {
        return $this->biaya;
    }

    /**
     * @param mixed $biaya
     */
    public function setBiaya($biaya)
    {
        $this->biaya = $biaya;
    }

    /**
     * @return mixed
     */
    public function getTanggalPengambilanHasil()
    {
        return $this->tanggalPengambilanHasil;
    }

    /**
     * @param mixed $tanggalPengambilanHasil
     */
    public function setTanggalPengambilanHasil($tanggalPengambilanHasil)
    {
        $this->tanggalPengambilanHasil = $tanggalPengambilanHasil;
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
    public function getIdHasil()
    {
        return $this->idHasil;
    }

    /**
     * @param mixed $idHasil
     */
    public function setIdHasil($idHasil)
    {
        $this->idHasil = $idHasil;
    }
}
