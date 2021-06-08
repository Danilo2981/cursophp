<?php

require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';


// para crear un objeto del tipo job con esas caracteristica darle caracteristicas unicas
// con el constructor podemos pasar lo inicializadno en la creacion del objeto
$job1 = new Job('PHP Developer', 'This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Accountant', 'This is an del putas job!!!');
$job2->months = 24;

$job3 = new Job('', 'This is an del putas job!!!');
$job3->months = 32;

$project1 = new Project('Project 1', 'Description 1');

// Arreglo de objetos
$jobs = [
    $job1,
    $job2,
    $job3,
];

$projects = [
    $project1,
];

// $jobs = [
//     // array 0
//     [
//         'title' => 'PHP Developer',
//         'description' => 'This is a cosa del putas',
//         'visible' => true,
//         'months' => 16
//     ],
//     // array 1
//     [
//         'title' => 'Accountant',
//         'description' => 'This is a cosa del tapus',
//         'visible' => true,
//         'months' => 14
//     ],
//     // array 2
//     [
//         'title' => 'Devops',
//         'description' => 'This is a cosa del gavers',
//         'visible' => true,
//         'months' => 5
//     ],
//     // array 3
//     [
//       'title' => 'Node Dev',
//       'description' => 'This is a cosa del gavers',
//       'visible' => true,
//       'months' => 24
//     ],
//     // array 4
//     [
//       'title' => 'Front Dev',
//       'description' => 'This is a cosa del gavers',
//       'visible' => true,
//       'months' => 3
//     ],
// ];

  
//   en la vista se llama al arreglo de objetos con $job-> en lugar de $job['']
// Tipe Hinting especifica el dato que esperamos una clase o una interface, permite validar 
  function printElement(Printable $job) {
  
    if($job->visible == false){
      return;
    }
  
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->getDescription() . '</p>';
    echo '<p>' . $job->getDurationAsString() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }
  