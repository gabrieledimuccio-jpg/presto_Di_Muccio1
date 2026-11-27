<x-layout>
    <div class="container-fluid c-custom">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="my-3 vh-75 d-flex justify-content-center">
                @auth
                    <a href="{{ route('create.article') }}" class="btn-custom fs-3">
                        Pubblica il tuo articolo
                    </a>
                @endauth
            </div>
        </div>
    </div>
</x-layout>
