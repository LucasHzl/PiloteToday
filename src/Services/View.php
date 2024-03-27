<?php

trait View
{
  public function renderView($viewPath, $data = [])
  {
 
    $viewFilePath = $this->getViewFilePath($viewPath);


    if ($viewFilePath === false || !is_readable($viewFilePath)) {
      throw new InvalidArgumentException("View file '$viewPath' not found or not readable.");
    }

   
    ob_start();

    extract($data);

 
    require_once $viewFilePath;


    $output = ob_get_clean();


    return $output;
  }

  private function getViewFilePath($viewPath)
  {
   
    $viewsDirectory = __DIR__ . '/../Templates/';


    $viewFilePath = realpath($viewsDirectory . $viewPath . '.php');



    return $viewFilePath;
  }
}
 