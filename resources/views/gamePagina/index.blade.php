@extends('layouts.app')

@section('menu')

<a href="{{ route('gamePagina.create') }}" title="Nieuwe Game"
    class="fixed z-90 bottom-10 right-10">
    {{-- Zie https://heroicons.dev/ --}}
    <svg class="w-14 h-14 fill-green-500" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
            clip-rule="evenodd">
        </path>
    </svg>
</a>
@endsection
@section('content')
<div>
    <h1 class="text-5xl">SMOKE - GAMESTORE</h1>
    <br>
    <hr>
</div>
<div>
    <div class="grid grid-cols-[auto_auto_auto_auto_1fr] gap-x-2">
        <div class="indexHeader">name</div>
        <div class="indexHeader">description</div>
        <div class="indexHeader">downloads</div>
        <div class="indexHeader">price</div>
        <div></div>
        @foreach ($games as $game)
        <div class="indexRegelElement">{{ $game->name }}</div>
        <div class="indexRegelElement">{{ $game->description }}</div>
        <div class="indexRegelElement">{{ $game->aantalDownloads }}</div>
        <div class="indexRegelElement">{{ $game->prijs }}</div>
        <div>
            <a href="{{ route('gamePagina.edit', [$game->demoId]) }}"
                title="Edit"
                class="indexCommando">
                Edit
            </a>
            <form method="POST"
                action="{{ route('gamePagina.destroy', [$game->demoId]) }}"
                class="inline">
                @method('DELETE') @csrf
                <input type="submit" value="Delete"
                    class="indexCommando">
            </form>
        </div>
        <hr>
        <hr>
        <hr>
        <hr>
        <div></div>
        @endforeach
    </div>
</div>
@endsection