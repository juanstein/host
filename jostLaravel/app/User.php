<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use phpDocumentor\Reflection\Types\String_;

class User extends Authenticatable
{
    use Notifiable;

    protected $name;
    protected $id;
    protected $mail;
    protected $password;
    protected $profileImgUr;
    protected $phone;
    protected $address;
    protected $birthDate;

    /**
     * User constructor.
     * @param $name
     * @param $id
     * @param $mail
     * @param $password
     * @param $profileImgUr
     * @param $phone
     * @param $address
     * @param $birthDate
     */
    public function __construct(String $name,int $id,String $mail,String $password,String $profileImgUr,String $phone,Location $address, $birthDate)
    {
        $this->name = $name;
        $this->id = $id;
        $this->mail = $mail;
        $this->password = $password;
        $this->profileImgUr = $profileImgUr;
        $this->phone = $phone;
        $this->address = $address;
        $this->birthDate = $birthDate;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(String $name)
    {
        $this->name = $name;
    }

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
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail(String $mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword(String $password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getProfileImgUr()
    {
        return $this->profileImgUr;
    }

    /**
     * @param mixed $profileImgUr
     */
    public function setProfileImgUr(String $profileImgUr)
    {
        $this->profileImgUr = $profileImgUr;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone(String $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress(Location $address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
