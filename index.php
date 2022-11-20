<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Work for Lesson 14</title>
    <style>
        body {
            color: darkblue;
        }

        pre {
            color: black;
        }

        hr {
            background-color: crimson;
        }
    </style>
</head>
<body>
<h5>Заняття 14. Порівняння об'єктів в ООП на PHP </h5>
<hr>

<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\City, App\Compare, App\Employee, App\Employee6, App\Employee13, App\Employee19, App\EmployeesCollection,
    App\EmployeesCollectionMod, App\Student7, App\Student19, App\User12, App\UsersCollection;

echo "<pre>",
"
    1.	Зробіть функцію compare1, яка параметром прийматиме два об'єкти і повертатиме true, 
    якщо вони мають однакові властивості та значення є екземплярами одного і того ж класу, і false, якщо це не так.
",
"</pre>";

//create an instance of the class Compare
$obj1 = new Compare("777");
$obj2 = new Compare(777);
echo "obj1  = ";
var_dump($obj1);
echo "<br />";
echo "obj2  = ";
var_dump($obj2);
echo "<br />";
echo "Result of variable comparison ($ obj1, $ obj2) = " . Compare::compare1($obj1, $obj2);

echo "<hr />";
echo "<pre>",
"
    2.	Зробіть функцію compare2, яка параметром прийматиме два об'єкти і повертатиме true, якщо передані змінні посилаються на той самий об'єкт, і false, якщо на різні.
",
"</pre>";

//create an instance of the class Compare
$obj1 = new Compare("888");
$obj2 = new Compare(888);
echo "obj1  = ";
var_dump($obj1);
echo "<br />";
echo "obj2  = ";
var_dump($obj2);
echo "<br />";

echo "Result of variable comparison ($ obj1, $ obj2) = " . Compare::compare2($obj1, $obj2);
echo "<br />";
$obj3 = $obj1;
echo "obj3  = ";
var_dump($obj3);
echo "<br />";
echo "Result of variable comparison ($ obj1, $ obj3) = " . Compare::compare2($obj1, $obj3);

echo "<hr />";

echo "<pre>",
"
    3.	Зробіть функцію compare3, яка параметром прийматиме два об'єкти та порівнюватиме їх.
    Функція повинна повертати 1, якщо передані змінні посилаються на той самий об'єкт.
    Функція повинна повертати 0, якщо об'єкти різні, але одного й того ж класу і з тими самими властивостями та їх значеннями.
    Функція повинна повертати -1 інакше.
",
"</pre>";

//create an instance of the class Compare
$obj1 = new Compare("999");
$obj2 = new Compare(999);
echo "obj1  = ";
var_dump($obj1);
echo "<br />";
echo "obj2  = ";
var_dump($obj2);
echo "<br />";
echo "Result of variable comparison ($ obj1, $ obj2) = " . Compare::compare3($obj1, $obj2);
echo "<br />";
$obj3 = $obj1;
echo "obj3  = ";
var_dump($obj3);
echo "<br />";
echo "Result of variable comparison ($ obj1, $ obj3) = " . Compare::compare3($obj1, $obj3);
echo "<br />";
$obj4 = "999";
echo "obj4  = ";
var_dump($obj4);
echo "<br />";
echo "Result of variable comparison ($ obj1, $ obj4) = " . Compare::compare3($obj1, $obj4);
echo "<hr />";

echo "<pre>",
"
    4.	Скопіюйте мій код класу Employee, потім реалізуйте описаний клас EmployeesCollection, перевірте його роботу.
",
"</pre>";

//create an instance of the class EmployeeCollection
$employeesCollection = new EmployeesCollection;
$employee = new Employee ('Anton', 3200);
$employeesCollection->add($employee);
var_dump($employeesCollection->get());
echo "<br />";
//trying to add to the array an object already present in this array
$employeesCollection->add($employee);
var_dump($employeesCollection->get());

echo "<hr />";

echo "<pre>",
"
    5.	Спростіть ваш клас EmployeesCollection за допомогою функції in_array, перевірте його роботу.
",
"</pre>";

//create an instance of the class EmployeeCollectionMod
$employeesCollectionMod = new EmployeesCollectionMod;
$employee = new Employee ('Antuan', 3333);
$employeesCollectionMod->add($employee);
var_dump($employeesCollectionMod->get());
echo "<br />";
//trying to add to the array an object already present in this array
$employeesCollectionMod->add($employee);
var_dump($employeesCollectionMod->get());

echo "<hr />";

echo "<pre>",
"
    6.	Зробіть клас Employee з громадськими властивостями name (ім'я) та salary (зарплата).
    7.	Зробіть клас Student з громадськими властивостями name (ім'я) та scholarship (стипендія).
    8.	Створіть по 3 об'єкти кожного класу і довільно запишіть їх у масив $ arr.
    9.	Переберіть циклом масив $ arr та виведіть на екран стовпець імен усіх працівників.
    10.	Аналогічно виведіть на екран стовпець імен усіх студентів.
    11.	Переберіть циклом масив $ arr та за його допомогою знайдіть суму зарплат працівників та суму стипендій студентів.
     Після циклу виведіть ці два номери на екран.
",
"</pre>";

//create an instance of the class Employee
$employee1 = new Employee6("Ivan", 3000);
$employee2 = new Employee6("Oleg", 2800);
$employee3 = new Employee6("Igor", 3400);
//create an instance of the class Student
$student1 = new Student7("Stepan", 800);
$student2 = new Student7("Ruslan", 700);
$student3 = new Student7("Platon", 900);
$arr = [$employee1, $employee2, $employee3, $student1, $student2, $student3];

echo "Employee's name : " . "<br />";
foreach ($arr as $item) {
    if ($item instanceof Employee6) {
        echo $item->name . "<br />";
    }
}
echo "<br />";

echo "Student's name : " . "<br />";
foreach ($arr as $item) {
    if ($item instanceof Student7) {
        echo $item->name . "<br />";
    }
}
echo "<br />";

$totalSalary = 0;
$totalScholarship = 0;
foreach ($arr as $item) {
    if ($item instanceof Employee6) {
        $totalSalary += $item->salary;
    }
    if ($item instanceof Student7) {
        $totalScholarship += $item->scholarship;
    }
}

echo "Employee's salary : {$totalSalary}" . "<br />";
echo "Student's scholarship : {$totalScholarship}" . "<br />";

echo "<hr />";
echo "<pre>",
"
    12.	Зробіть клас User з громадськими властивостями name і surname.
    13.	Зробіть клас Employee, який успадковуватиметься від класу User і додаватиме властивість salary.
    14.	Зробіть клас City з публічними властивостями name та population.
    15.	Створіть 3 об'єкти класу User, 3 об'єкти класу Employee, 3 об'єкти класу City, і довільно запишіть їх у масив $ arr.
    16.	Переберіть циклом масив $ arr та виведіть на екран стовпець властивостей name тих об'єктів, 
    які належать класу User або нащадку цього класу.
    17.	Переберіть циклом масив $ arr і виведіть на екран стовпець властивостей name тих об'єктів, 
    які не належать до класу User або нащадка цього класу.
    18.	Переберіть циклом масив $ arr і виведіть на екран стовпець властивостей name тих об'єктів, 
    які належать саме класу User, тобто не класу City і класу Employee.
",
"</pre>";

//create an instance of the class User
$user1 = new User12("Karl", "Dor");
$user2 = new User12("Ignat", "Pat");
$user3 = new User12("Vlad", "Ram");
//create an instance of the class Employee
$employee1 = new Employee13("Stepan", "Lee", 2500);
$employee2 = new Employee13("Roman", "Cos", 2800);
$employee3 = new Employee13("Potap", "Bap", 2700);
//create an instance of the class City
$city1 = new City("London", 9500000);
$city2 = new City("Paris", 11100000);
$city3 = new City("Berlin", 3570000);
$arr = [$user1, $user2, $user3, $employee1, $employee2, $employee3, $city1, $city2, $city3];

echo "Values of the name properties of objects of the User class and its descendants : " . "<br />";
foreach ($arr as $item) {
    if ($item instanceof User12) {
        echo $item->name . "<br />";
    }
}
echo "<br />";

echo "Name property values of non-objects and descendants of the User class : " . "<br />";
foreach ($arr as $item) {
    if (!$item instanceof User12) {
        echo $item->name . "<br />";
    }
}
echo "<br />";

echo "Values of properties of the name of objects of the User class only : " . "<br />";
foreach ($arr as $item) {
    if ((!$item instanceof Employee13) && (!$item instanceof City)) {
        echo $item->name . "<br />";
    }
}

echo "<hr />";

echo "<pre>",
"
    19.	Скопіюйте мій код класів Employee та Student і самостійно не підглядаючи у мій код реалізуйте такий самий клас UsersCollection.
",
"</pre>";

//create an instance of the class Employee
$employee1 = new Employee19("Mark", 1700);
echo "employee1 - name : " . $employee1->getName() . "  salary : " . $employee1->getSalary() . "<br />";
$employee2 = new Employee19("Otto", 2300);
echo "employee2 - name : " . $employee2->getName() . "  salary : " . $employee2->getSalary() . "<br />";
//create an instance of the class Student
$student1 = new  Student19("Vitaly", 400);
echo "student1 - name : " . $student1->getName() . "  scholarship : " . $student1->getScholarship() . "<br />";
$student2 = new Student19("Arnold", 500);
echo "student2 - name : " . $student2->getName() . "  scholarship : " . $student2->getScholarship() . "<br />";
//create an instance of the class UsersCollection
$usersCollection = new UsersCollection;
$usersCollection->add($employee1);
$usersCollection->add($employee2);
$usersCollection->add($student1);
$usersCollection->add($student2);

echo "Total salary of all employees  = " . $usersCollection->getTotalSalary() . "<br />";
echo "Amount of scholarships of all students = " . $usersCollection->getTotalScholarship() . "<br />";
echo "Total payout = " . $usersCollection->getTotalPayment() . "<br />";

echo "<hr />";
?>
</body>
</html>