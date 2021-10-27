<?php

namespace App\Contracts\Services\Task;

interface QuickTaskServiceInterface{

    public function getTask();

    public function addTask($validated);

    public function deleteTask($id);

}

?>