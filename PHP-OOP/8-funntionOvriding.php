 <?php
  require_once 'Data/Manager.php';


  $manager = new Manager();
  $manager->name = "Marleess";
  $manager->sayHello("Je");


  $svp = new Supervisor();
  $svp->name = "Marleess dua";
  $svp->sayHello("Ej");
