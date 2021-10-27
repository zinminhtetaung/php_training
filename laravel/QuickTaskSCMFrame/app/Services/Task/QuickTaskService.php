<?php

namespace App\Services\Task;

use App\Contracts\Services\Task\QuickTaskServiceInterface;
use App\Contracts\Dao\Task\QuickTaskDaoInterface;

class QuickTaskService implements QuickTaskServiceInterface
{

    private $taskDao;

    public function __construct(QuickTaskDaoInterface $taskDao)
    {
        $this->taskDao = $taskDao;
    }

    public function getTask()
    {
      return $this->taskDao->getTask();
    }

    public function addTask($validated)
    {
      return $this->taskDao->addTask($validated);
    }

    public function deleteTask($id)
    {
      return $this->taskDao->deleteTask($id);
    }

}

?>