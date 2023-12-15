<div>
    {{-- @if (session()->has('success'))
        <div>{{session('success')}}</div>
    @endif --}}

    {{-- sec 1 🤙🎉 --}}
    {{-- <div class="todo d-flex flex-column align-items-center justify-content-center text-center">
        <section class="sec1 d-flex flex-column align-items-center py-4 rounded">
            <div class="img-container w-75 rounded-circle">
                <img src="{{Vite::asset('resources/tools/assets/professional.png')}}" class="img-fluid" alt="">
            </div>
            <div class="disc">
                <h4 class="my-3 fw-bold">Get Organized Your Life</h4>
                <p>Addy is a simple and effective <br> to-do list and task manager app <br> which helps you manage time</p>
                <button class="started-btn btn p-3 px-5 text-white fs-5 fw-bold">Get Started</button>
            </div>
        </section>
    </div> --}}

    {{-- sec 2 --}}
    <div class="todo d-flex flex-column align-items-center justify-content-center">
        <section class="sec2 rounded position-relative overflow-hidden">
            <div class="layout rounded-circle position-relative"></div>
            <div class="sec-data p-4 w-100 position-absolute">
                <h5 class="fw-bold my-4 mb-5"> Welcome to Addy 🎉</h5>
                <form wire:submit="create" class="d-flex flex-column mt-3">
                    <div class="mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input wire:model="name" type="text" class="form-control" id="name" placeholder="name">
                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input wire:model="email" type="email" class="form-control" id="email" placeholder="email">
                        @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input wire:model="password" type="password" class="form-control" id="password" placeholder="password">
                        @error('password')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button class="started-btn btn text-white fw-bold px-5 mb-3">Sign up</button>
                    <a href="">Already have account.!</a>
                    {{-- <button wire:click.prevent="create">Create</button> --}}
                </form>
            </div>
        </section>
    </div>

    {{-- sec 4 --}}
    {{-- <div class="todo d-flex flex-column align-items-center justify-content-center">
        <section class="sec4 p-4 rounded">
            <h5 class="fw-bold">Hello Ender 🤙</h5>
            <p>Today you have 4 tasks</p>
        </section>
    </div> --}}

</div>
