<?php

namespace app\Repository;

use app\DB;
use app\Model\Employee;
use app\Model\ListEmployees;
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
        $connect = DB::pdo();
        $sql = "SELECT er.name , e.fio , e.email  FROM employee e
        INNER JOIN employee_role er ON e.employee_role_id = er.id";

        $stmt = $connect->query($sql);

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
