@extends('layouts.app')
@section('content')
<form action="{{ route('gamePagina.store') }}" method="POST" class="m-2">
    @csrf
    <div class="grid grid-cols-[auto_1fr] mx-2">
        <label for="name" class="mr-2 text-white">Naam:</label>
        <div>
            <input type="text" name="name" id="name"
                placeholder="naam"
                value="{{ old('name') }}"
                class="text-purple-700 w-5/6">
            @error('name')
            <div class="text-white">{{ $message}}</div>
            @enderror
        </div>
        <label for="description" class="mr-2 text-white">Omschrijving:</label>
        <div>
            <input type="text" name="description" id="description"
                placeholder="omschrijving"
                value="{{ old('description') }}"
                class="text-purple-700 w-5/6 mt-2">
            @error('description')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <label for="prijs" class="mr-2 text-white">Prijs:</label>
        <div>
            <input type="decimal" name="prijs" id="prijs"
                placeholder="prijs"
                value="{{ old('prijs') }}"
                class="text-purple-700 w-5/6 mt-2">
            @error('price')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
    </div>

    </div>
    <div></div>
    <div class="mt-20">
        <input type="submit" value="Create" class="btnVeiligeActie">
        <a href="{{ route('gamePagina.index') }}"
            class="btnNeutraleActie">Cancel</a>
    </div>
    </div>
</form>
@endsection