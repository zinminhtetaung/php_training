<?php

namespace App\Contracts\Dao\Task;

interface QuickTaskDaoInterface
{
    /**
   * To show post
   * @param Request $request request with inputs
   * @return Object $post saved post
   */
  public function getTask();

  public function addTask($validated);

  public function deleteTask($id);
}

?>