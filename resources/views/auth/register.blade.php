<x-layout>
    <div class="container-fluid div3-custom">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-5 pt-4 mb-3">
                    REGISTRATI
                </h1>
                @if ($errors->any())
                <div class="alert alert-danger py-2">
                    <ul class="m-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
        
        <div class="row justify-content-center vh-75">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('register') }}" class="shadow rounded p-3 mb-5">
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline d-flex flex-column align-items-center mb-3">
                                <label class="form-label" for="name">Nome</label>
                                <input type="text" id="name" name="name" class="form-control w-75" />
                            </div>
                        </div>
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline d-flex flex-column align-items-center mb-3">
                            <label class="form-label" for="email">Indirizzo Email</label>
                            <input type="email" id="email" name="email" class="form-control w-75" />
                        </div>
                        
                        
                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline d-flex flex-column align-items-center mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control w-75" />
                        </div>
                        
                        <!-- Password confirmation -->
                        <div data-mdb-input-init class="form-outline d-flex flex-column align-items-center mb-3">
                            <label class="form-label" for="password_confirmation">Conferma Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control w-75" />
                        </div>
                        
                        <!-- Submit button -->
                        <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4 w-75 mx-auto">REGISTRATI</button>
                        
                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>oppure registrati con:</p>
                            <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            
                            <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>
                            
                            <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>
                            
                            <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    
</x-layout>
