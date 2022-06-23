<?php

namespace App\Actions\Web;

use App\Models\Task;
use Inertia\Inertia;
use Inertia\Response;
use Lorisleiva\Actions\Concerns\AsAction;

class GetTaskDetails
{
    use AsAction;

    /**
     * @param  Task  $task
     * @return Response
     */
    public function asController()
    {
        return Inertia::render('Tasks/Form', array_merge_recursive(Inertia::getShared()));
    }
}
