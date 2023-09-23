<?php

namespace app\Controller;

use app\Model\ListEmployees;
use app\Repository\EmployeesListRepository;
use app\View;

/**
 * Summary of EmployeesController
 */
class EmployeesController
{
    /**
     * Список сотрулников
     * @return ListEmployees
     */
    public function list(): ListEmployees
    {
        $rep = new EmployeesListRepository();

        return $rep->all();
    }
}
