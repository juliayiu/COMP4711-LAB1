<?php

/*
 * Description of Student
 * 
 * @author Julia Yiu
 */

class Student {
    /*
     * This function is the constructor.
     * It creates the first name, last name and 
     * the arrays of emails and grades.
     */

    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * This function is a mutator method used to set the email address 
     * each student may have and added it into the emails array.
     * 
     * @param string $which
     * @param string $address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /**
     * This function is a mutator method used to set the grade of the student
     * by adding it into the grades array.
     * 
     * @param double $grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * This function is used to calculate the student's
     * average grade and returning the average grade.
     * 
     * @return double $total
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /**
     * This function returns each student to string for reporting.
     * 
     * @return string
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}
