<?php

class Payroll {
    private string $fname = "loraez";
    private string $lname = "alex";
    private float $tax = 50;
    private float $salary = 100;

    public function computeNet(): float {
        return $this->salary - $this->tax;
    }

    public function getEmployeeName(): string {
        return $this->fname . " " . $this->lname;
    }

    public function displayNet(): string {
        return number_format($this->computeNet(), 2);
    }
}

$payroll = new Payroll();
echo "Employee Name: " . $payroll->getEmployeeName() . "<br/>";
echo "Net: $" . $payroll->displayNet();

?>