<div>
    <div class="container">
        <div class="row m-5">
            <div class="col-md-12">

                <p>
                    Input 1 : Exemple in git (Only method that no return errors in console log, but not alter class when errors are validate)<br/>
                    Input 2 : wire:model and onChange <br/>
                    Input 3 : Just wire:model <br/>
                </p>
                <p>
                    Comment the form-group to test it one by one
                </p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form wire:submit.prevent="save">
                    <div class="form-group">
                        <input wire:ignore onchange="@this.set('cpf', this.value)" type="text"
                               class="form-control @error('cpf') is-invalid @enderror"
                               id="cpf" name="cpf">
                        @error('cpf')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model="cpf2" onchange="@this.set('cpf2', this.value)" type="text"
                               class="form-control @error('cpf2') is-invalid @enderror"
                               id="cpf2" name="cpf2">
                        @error('cpf2')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model="cpf3" type="text"
                               class="form-control @error('cpf3') is-invalid @enderror"
                               id="cpf3" name="cpf3">
                        @error('cpf3')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')

    <script>
        $(document).ready(function () {
            $('#cpf').inputmask("999.999.999-99");
            $('#cpf2').inputmask("999.999.999-99");
            $('#cpf3').inputmask("999.999.999-99");
        });
    </script>

@endpush
