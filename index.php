<?php 

class StudentGrade {

    private string $firstname = "Alex";
    private string $lastname = "Loraez";
    private int $prelim = 70;
    private int $midterm = 80;
    private int $endterm = 90;

    public function getEmployeeName() {
      return $this->lastname . ", " . $this->firstname;
       
    }

    public function computeNet() : string {
        $ave = $this->prelim + $this->midterm + $this->endterm;
        return $ave / 3;
    }
}

$studentGrade = new StudentGrade();

echo "Employee Name : " . $studentGrade->getEmployeeName() . "\n";
echo "<br/>";
echo "net : " . $studentGrade->computeNet();
?>