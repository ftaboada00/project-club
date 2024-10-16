<?php
class Member
{

    private $numMember;

    public function __construct($id)
    {

        $this->numMember = $id;
    }

    public function setNumMember($newNumMember)
    {

        $this->numMember = $newNumMember;
    }

    public function calculateAge($birth_date): int
    {
        $current_date = date('Y-m-d');
        $birth_date_obj = new DateTime($birth_date);
        $current_date_obj = new DateTime($current_date);
        $diff = $current_date_obj->diff($birth_date_obj);
        $age_years = $diff->y;
        return $age_years;
    }

    public function calcularCuota($birth_date): float
    {

        return 0.0;
    }
}
