<div class="todo d-flex flex-column align-items-center justify-content-center">
    <section class="sec2 rounded position-relative overflow-hidden">
        <div class="layout rounded-circle position-relative"></div>
        <div class="sec-data p-4 w-100 position-absolute">
            <h5 class="fw-bold my-4 mb-5"> Welcome to Addy 🎉</h5>
            <form wire:submit="login" class="d-flex flex-column mt-3">
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
                <button class="started-btn btn text-white fw-bold px-5 mb-3">Login</button>
                <a href="">Not have an Account.?</a>
            </form>
        </div>
    </section>
</div>

