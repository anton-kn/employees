<?php

namespace app\Repository;

use app\DB;
use app\Model\Employee;
use app\Model\Employees;
use app\Model\ListEmployees;
use app\Model\RoleEmployees;
use PDO;

/**
 * Репозиторий сотрудников
 */
class EmployeesListRepository
{
    /**
     * Получаем весь список сотрудников
     * @return ListEmployees
     */
    public function all(): ListEmployees
    {
        $db = DB::pdo();
        $sql = "SELECT er.name , e.fio , e.email  FROM employees e
        INNER JOIN employees_role er ON e.employees_role_id = er.id";

        $stmt = $db->query($sql);

        $fetchAll = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $listEmployees = new ListEmployees();
        foreach ($fetchAll as $row) {
            $employee = new Employee();
            $employee->fromArray($row);
            $listEmployees->setEmployees($employee);
        }

        return $listEmployees;
    }
}
