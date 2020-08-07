@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="game-details border-b border-gray-800 pb-12 flex">
        <div class="flex-none">
            <img src="/images/content-spots/clothing.jpg" alt="Game Cover">
        </div>
        <div class="ml-12">
            <h2 class="font-semibolt text-4xl">Final Fantasy VII remake</h2>
            <div class="text-gray-400">
                <span>Adventure, RPG</span>
                &middot;
                <span>Square, Enix</span>
                &middot;
                <span>Playstation 4</span>
            </div>
            <div class="flex flex-wrap items-center mt-8">
                <div class="flex items-center">
                    <div class="w-16 h-16 rounded-full bg-gray-800">
                        <div class="font-semibold flex justify-center items-center h-full">90%</div>
                    </div>
                    <div class="ml-4 text-xs">Member<br>Score</div>
                </div>
                <div class="flex items-center ml-4">
                    <div class="w-16 h-16 rounded-full bg-gray-800">
                        <div class="font-semibold flex justify-center items-center h-full">92%</div>
                    </div>
                    <div class="ml-4 text-xs">Critic<br>Score</div>
                </div>
                <div class="flex items-center space-x-4 ml-4">
                    <div class="w-8 h-8 flex justify-center items-center rounded-full bg-gray-800">
                        <a href="" class="hover:text-gray-400">a</a>
                    </div>
                    <div class="w-8 h-8 flex justify-center items-center rounded-full bg-gray-800">
                        <a href="" class="hover:text-gray-400">a</a>
                    </div>
                    <div class="w-8 h-8 flex justify-center items-center rounded-full bg-gray-800">
                        <a href="" class="hover:text-gray-400">a</a>
                    </div>
                    <div class="w-8 h-8 flex justify-center items-center rounded-full bg-gray-800">
                        <a href="" class="hover:text-gray-400">a</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection