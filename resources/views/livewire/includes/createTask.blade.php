<div class="todo d-flex flex-column align-items-center justify-content-center">
    <section class="sec4 rounded position-relative overflow-hidden">
        <div class="layout rounded-circle position-relative"></div>
        <div class="sec-data p-4 w-100 position-absolute">
            <h5 class="fw-bold mt-4"> Hello Ender 🤙</h5>
            <p>Today you have 4 tasks</p>
            <form wire:submit="create" class="d-flex flex-column mt-3">
                <div class="mb-2">
                    <input wire:model="task" type="text" class="form-control"
                    placeholder="create new task">
                    @error('task')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <button class="started-btn btn text-white fw-bold px-5 mb-3">Send</button>
            </form>

            @include('livewire.includes.tasks')
        </div>
    </section>
</div>
