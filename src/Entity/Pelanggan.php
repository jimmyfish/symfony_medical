<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Pelanggan
{
    private $id;

    private $nama;

    private $alamat;

    private $telepon;

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
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * @param mixed $nama
     */
    public function setNama($nama)
    {
        $this->nama = $nama;
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
    public function getTelepon()
    {
        return $this->telepon;
    }

    /**
     * @param mixed $telepon
     */
    public function setTelepon($telepon)
    {
        $this->telepon = $telepon;
    }
}
