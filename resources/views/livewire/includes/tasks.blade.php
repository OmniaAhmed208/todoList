{{-- <div class="todo d-flex flex-column align-items-center justify-content-center">
    <section class="sec4 rounded position-relative overflow-hidden">
        <div class="layout rounded-circle position-relative"></div>
        <div class="sec-data p-4 w-100 position-absolute">
            <h5 class="fw-bold mt-4"> Hello Ender 🤙</h5>
            <p>Today you have 4 tasks</p> --}}

            @foreach ($tasks as $task)

                <div class="todo_task position-relative mb-4">
                    <div class="task bg-white rounded pt-3 pb-2 ps-3">
                        <div class="d-flex">
                            @if ($task->isCompleted)
                                <i class="fa fa-check-circle text-success mt-1 me-2"></i>
                            @endif

                            @if ($editingId == $task->id)
                                <div class="d-block me-3 taskEditActions">
                                    <input wire:model="taskName" type="text" class="form-control">
                                    @error('taskName')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                    <i wire:click="update" class="fa fa-check text-success mt-2 me-3"></i>
                                    <i wire:click="cancelEdit" class="fa fa-close text-danger mt-2"></i>
                                </div>
                            @else
                                <h5>{{$task->task}}</h5>
                            @endif
                        </div>

                        @if (!($editingId == $task->id))
                            <div class="position-absolute todo-actions">
                                <div class="toggle">
                                    <label for="task-{{$task->id}}">
                                        <i class="fa fa-check"></i>
                                    </label>
                                    <input wire:click="toggle({{$task->id}})" id="task-{{$task->id}}" type="checkbox" class="me-3" hidden>
                                </div>

                                <div class="edit">
                                    <label for="task-edit">
                                        <i wire:click="edit({{$task->id}})" class="fa fa-edit"></i>
                                    </label>
                                </div>

                                <div class="remove">
                                    <label for="task-delete">
                                        <i wire:click="delete({{$task->id}})" class="fa fa-trash"></i>
                                    </label>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

            @endforeach
            
         {{-- </div>
    </section>
</div> --}}
