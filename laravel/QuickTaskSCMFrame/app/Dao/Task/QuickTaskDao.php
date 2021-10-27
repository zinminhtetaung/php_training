<?php

namespace App\Dao\Task;

use App\Models\Task;
use App\Contracts\Dao\Task\QuickTaskDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Data accessing object for post
 */
class QuickTaskDao implements QuickTaskDaoInterface
{

    public function getTask() 
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return $tasks;
    }

    public function addTask($validated){
        $task = new Task;
        $task->name = $validated['name'];
        $task->save();

        return redirect('/');
    }

    public function deleteTask($id)
    {
        Task::findOrFail($id)->delete();
        return redirect('/');
    }


}




?>