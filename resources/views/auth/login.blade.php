<x-layout>
    <div class="container-fluid div-custom">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-5 pt-4 mb-3">
                    ACCEDI
                </h1>
            </div>
        </div>
        <div class="row justify-content-center vh-100">
            <div class="col-12 col-md-6 text-center">
                <form method="POST" action="{{ route('login') }}" class="shadow border rounded p-3 mb-5">
                    @csrf
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4 d-flex flex-column align-items-center">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" name="email" id="email" class="form-control w-75" />
                    </div>
                    
                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4 d-flex flex-column align-items-center">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control w-75" />
                    </div>
                    
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            
                            <div class="col">
                                <!-- Simple link -->
                                <a href="#!">Hai dimenticato la password?</a>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Accedi</button>
                    
                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Non sei un membro? <a href="#!">Registrati</a></p>
                        <p>oppure registrati con:</p>
                        <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        
                        <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>
                        
                        <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>
                        
                        <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
</x-layout>
