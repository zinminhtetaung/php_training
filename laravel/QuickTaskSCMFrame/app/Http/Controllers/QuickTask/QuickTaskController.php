<?php

namespace App\Http\Controllers\QuickTask;


use App\Contracts\Services\Task\QuickTaskServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;

class QuickTaskController extends Controller
{
  /**
   * post interface
   */
  private $taskInterface;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(QuickTaskServiceInterface $taskInterface)
  {
    $this->taskInterface = $taskInterface;
  }

  public function showTask()
  {
    $tasks = $this->taskInterface->getTask();

    return view('tasks', [
        'tasks' => $tasks
    ]);
  }

  public function addTask(UserStoreRequest $request)
  {
    $validated = $request->validated();

    $this->taskInterface->addTask($validated);

    return redirect('/');
  }

  public function deleteTask($id)
  {
    $this->taskInterface->deleteTask($id);
    
    return redirect('/');
  }
  

}

?>