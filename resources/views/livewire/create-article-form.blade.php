<div class="d-flex justify-content-center">
    <form style="width: 37rem;" class="form-custom mb-4" wire:submit="store">
        <!-- Title input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="title">Titolo:</label>
            <input type="text" id="title" wire:model.blur="title" class="form-control @error('title') is-invalid @enderror" />
            @error('title') 
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Description input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="description">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" wire:model.blur="description" cols="10" rows="10"></textarea>
            @error('description') 
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Price input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="price">Prezzo:</label>
            <input type="text" id="price" class="form-control @error('price') is-invalid @enderror" wire:model.blur="price" />
            @error('price') 
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        
        
        <div class="mb-3">
            <select id="category" wire:model.blur="category" class="form-control @error('category') is-invalid @enderror">
                <option label disabled>Seleziona una categoria</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                <option value="" selected disabled>Seleziona una categoria</option>
                @endforeach
            </select>
            @error('category') 
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <!-- Submit button -->
        <div class="d-flex justify-content-center">
            <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-3">Pubblica articolo</button>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
        @endif
    </form>
</div>
