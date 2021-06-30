<?php

namespace Refactoring\AbstractFactory\Conceptual;

interface RealEstateFactory
{
  public function createChair();
  
  public function createBed();
}


/**
 * 
 */
class ModernFactory implements RealEstateFactory
{
  public function createChair()
  {
    return new ModernChair();
  }
  
  public function createBed()
  {
    return new ModernBed();
  }
}


/**
 * 
 */
class VictorianFactory implements RealEstateFactory
{
  public function createChair()
  {
    return new VictorianChair();
  }
  
  public function createBed()
  {
    return new VictorianBed();
  }
}


interface ModernAbstract
{
  public function displayInformation(): string;
}

class ModernChair implements ModernAbstract
{
  public function displayInformation(): string
  {
    return "chair modern \n";
  }
}

class ModernBed implements ModernAbstract
{
  public function displayInformation(): string
  {
    return "bed modern \n";
  }
}



interface VictorianAbstract
{
  public function displayInformation(): string;
}

class VictorianChair implements VictorianAbstract
{
  public function displayInformation(): string
  {
    return "chair victorian \n";
  }
}

class VictorianBed implements VictorianAbstract
{
  public function displayInformation(): string
  {
    return "bed victorian \n";
  }
}

/**
 * 
 */
class MakingFurniture
{
  private $modernFurniture;
  private $victorianFurniture;
 
  public function __construct()
  {
    $this->modernFurniture = new ModernFactory();
    $this->victorianFurniture = new VictorianFactory();
  }
  
  
  public function modern()
  {
    return $this->modernFurniture->createChair()
      ->displayInformation();
  }
  
  public function victorian()
  {
    return $this->victorianFurniture->createChair()
      ->displayInformation();
  }
}


$factory = new MakingFurniture();

echo "<pre>";
echo $factory->modern();
echo $factory->victorian();
