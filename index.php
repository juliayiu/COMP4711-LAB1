<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include ('Student.php');

        // Creating an array of students called $students
        $students = array();

        // Adding the first Student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        // Adding the Second Student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        // Adding a third Student, myself!
        $third = new Student();
        $third->surname = "Yiu";
        $third->first_name = "Julia";
        $third->add_email('home', 'jyiu93@gmail.com');
        $third->add_email('work', 'jyiu8@my.bcit.ca');
        $third->add_grade(90);
        $third->add_grade(75);
        $third->add_grade(90);
        $students['a009'] = $third;

        // A sort function that sorts an array by key. In this case, it is
        // sorting the Students array.
        ksort($students);

        // A for-each loop that prints out each student entered 
        // in the array of students
        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
