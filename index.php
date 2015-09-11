<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lab01 Gerald Becker</title>
    </head>
    <body>
        <?php
        include('Student.php');

        $students = array();
        
        //add students
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        $myself = new Student();
        $myself->surname = "Becker";
        $myself->first_name = "Gerald";
        $myself->add_email('home','ger_0_1@hotmail.com');
        $myself->add_email('work1','gerald@workemail.ca');
        $myself->add_email('work2','gerald@f15eagleger.com');
        $myself->add_grade(77);
        $myself->add_grade(99);
        $myself->add_grade(85);
        $students['g00900309'] = $myself;
        
        ksort($students);
        
        ?>
        
        <h1>List of Students</h1>
        <hr>
        <?php
        //print all the students
        foreach ($students as $student) {
            echo $student->toString();
        ?>
        <hr>
        <?php
        }
        
        
        ?>
    </body>
</html>
