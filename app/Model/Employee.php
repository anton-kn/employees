<?php

namespace app\Model;

/**
 * Сотрудник
 */
class Employee
{

    /**
     * Наименование роли
     * @var string
     */
    private $nameRole;

    /**
     * ФИО
     * @var string
     */
    private $fio;


    /**
     * Эл. почта
     * @var string
     */
    private $email;

    /**
     * Наименование роли
     * @return string
     */
    public function getNameRole()
    {
        return $this->nameRole;
    }

    /**
     * Наименование роли
     * @param string $nameRole Наименование роли
     * @return Employee
     */
    public function setNameRole($nameRole): Employee
    {
        $this->nameRole = $nameRole;
        return $this;
    }

    /**
     * Эл. почта
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Эл. почта
     * @param string $email Эл. почта
     * @return Employee
     */
    public function setEmail($email): Employee
    {
        $this->email = $email;
        return $this;
    }

    /**
     * ФИО
     * @return string
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * ФИО
     * @param string $fio ФИО
     * @return Employee
     */
    public function setFio($fio): Employee
    {
        $this->fio = $fio;
        return $this;
    }

    /**
     * Массив данных
     * @param array $row
     * @return Employee
     */
    public function fromArray(array $row): Employee
    {
        if (isset($row['fio'])) {
            $this->fio = $row['fio'];
        }
        if (isset($row['email'])) {
            $this->email = $row['email'];
        }
        if (isset($row['name'])) {
            $this->nameRole = $row['name'];
        }

        return $this;
    }
}
