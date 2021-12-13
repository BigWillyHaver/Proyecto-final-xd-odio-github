<div>

    <div class="row">

        <div class="col-md-4 mx-auto">
            <img class="mx-auto d-block" style="width: 150px; heigth: 150px;"
             src="{{Storage::disk('public')->url('images/otros/verbalase.gif')}}" alt="">
            <form wire:submit.prevent="login">
                <div class="mb-3">
                    <label class="form-label">Correo Electronico</label>
                    <input wire:model="email" type="email" class="form-control" placeholder="Ejemplo@hotmail.com">
                    @error('email') <b class="text-danger">{{$message}}</b> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input wire:model="password" placeholder="********" type="password" class="form-control">
                    @error('password') <b class="text-danger">{{$message}} </b> @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label">Recuerdame</label>
                </div>
                <button type="submit" class="btn btn-primary">Acceder</button>
            </form>
        </div>
    </div>
</div>
