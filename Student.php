<?php

/**
 * A Student class that holds their information such as various emails and 
 * grades that they have obtained. 
 *
 * @author Gerald
 */
class Student {
    /**
     * Initializes a student.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Adds an email address for the student. The type of email can be
     * specified. There is no limit to the number of emails that can be
     * added.
     * 
     * @param type $which The type of email.
     * @param type $address The email address.
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * Adds grades that the student received. 
     * 
     * @param type $grade The grade of the student.
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Calculates the average grade for a student.
     * 
     * @return double The average score for the student's grades.
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    /**
     * Prints out the student record in a nice format.
     * 
     * @return string The entire student record. 
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach ($this->emails as $which => $what) {
            $result .= $which . ': ' . $what . "\n";
        }
        return '<pre>'.$result.'</pre>';
    }
}
