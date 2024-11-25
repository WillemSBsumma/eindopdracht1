@extends('layouts.app')
@section('content')

<form action="{{ route('gamePagina.update', [$game->DemoId]) }}"
    method="POST" class="m-2">
    @csrf @method('PATCH')
    <div class="grid grid-cols-[auto_1fr] mx-2">
        <label for="name" class="mr-2">Naam:</label>
        <div>
            <input type="text" name="name" id="name"
                value="{{ $game->name }}" class="w-full">
            @error('name')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <label for="description" class="mr-2 mt-2">Omschrijving:</label>
        <div class="mt-2">
            <input type="text" name="description"
                id="description" value="{{ $game->description }}"
                class="w-full">
            @error('description')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <label for="prijs" class="mr-2 mt-2">Prijs:</label>
        <div class="mt-2">
            <input type="decimal" name="prijs"
                id="prijs" value="{{ $game->prijs }}"
                class="w-full">
            @error('prijs')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <label for="aantalDownloads" class="mr-2 mt-2">Downloads:</label>
        <div class="mt-2">
            <input type="int" name="aantalDownloads"
                id="aantalDownloads" value="{{ $game->aantalDownloads }}"
                class="w-full">
            @error('aantalDownloads')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div></div>
        <div class="mt-20">
            <input type="submit" value="Save" class="btnVeiligeActie">
            <a href="{{ route('gamePagina.index') }}" class="btnNeutraleActie">Ga terug</a>
        </div>
    </div>
</form>
@endsection