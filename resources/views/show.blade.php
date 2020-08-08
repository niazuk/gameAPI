@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="game-details border-b border-gray-800 pb-12 flex">
        <div class="flex-none">
            <img src="{{ Str::replacefirst('t_thumb','t_cover_big',$game['cover']['url']) }}" alt="Game Cover">
        </div>
        <div class="ml-12">
        <h2 class="font-semibolt text-4xl">{{ $game['name']}}</h2>
            <div class="text-gray-400">
                <span>
                    @foreach ($game['genres'] as $genres)
                        {{ $genres['name']}}
                    @endforeach
                </span>
                &middot;
            <span>{{ $game['involved_companies'][0]['company']['name'] }}</span>
                &middot;
                <span>@foreach($game['platforms'] as $platform)
                        @if(array_key_exists('abbreviation',$platform))
                            {{ $platform['abbreviation'] }},
                        @endif
                    @endforeach
                </span>
            </div>
            <div class="flex flex-wrap items-center mt-8">
                <div class="flex items-center">
                    <div id="memberRating" class="w-16 h-16 rounded-full bg-gray-800 relative">
                        @push('scripts')
                        <script>
                            // progressbar.js@1.0.0 version is used
                            // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
                            const progressbarContainer = document.getElementById('memberRating');
                            var bar = new ProgressBar.Circle(progressbarContainer, {
                            color: 'white',
                            // This has to be the same size as the maximum width to
                            // prevent clipping
                            strokeWidth: 6,
                            trailWidth: 3,
                            trailcolor: '#4A5568',
                            easing: 'easeInOut',
                            duration: 2500,
                            text: {
                            autoStyleContainer: false
                            },
                            from: { color: '#48BB78', width: 6 },
                            to: { color: '#48BB78', width: 6 },
                            // Set default step function for all animate calls
                            step: function(state, circle) {
                            circle.path.setAttribute('stroke', state.color);
                            circle.path.setAttribute('stroke-width', state.width);

                            var value = Math.round(circle.value() * 100);
                            if (value === 0) {
                            circle.setText('0%');
                            } else {
                            circle.setText(value+'%');
                            }

                            }
                            });
                         
                            bar.animate(0.5);  // Number from 0.0 to 1.0
                        </script>
                        @endpush
                        {{-- <div class="font-semibold flex justify-center items-center h-full"></div> --}}
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