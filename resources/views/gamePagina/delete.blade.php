@extends('layouts.app')
@section('content')
<form action="{{ route('demonstraties.destroy', [$demo->demoId]) }}"
    method="POST">
    @csrf @method('DELETE')
    <div class="grid grid-cols-[auto_1fr] mx-2">
        <div class="mr-2 text-gray-600">Naam:</div>
        <div class="text-purple-700 w-5/6">{{ $demo->name }}</div>
        <div class="mr-2 text-gray-600">Omschrijving:</div>
        <div class="text-purple-700 w-5/6">{{ $demo->description }}</div>
        <div></div>
        <div class="mt-20">
            <input type="submit" value="Delete"
                class="btnGevaarlijkeActie">
            <a href="{{route('demonstraties.index')}}" class="btnVeiligeActie">Cancel</a>
        </div>
    </div>
</form>
@endsection