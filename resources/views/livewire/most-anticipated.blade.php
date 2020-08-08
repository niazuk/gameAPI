<div wire:init="loadMostAnticipated" class="most-anticipated space-y-10 mt-8">
    @forelse($mostAnticipated as $game)
    <div class="game flex">
        <a href="#">
            <img src="{{ Str::replacefirst('t_thumb','t_cover_small',$game['cover']['url']) }}" alt="Game Cover"
                class="w-16 hover:opacity-75 transition ease-in-out duration-150">
        </a>
        <div class="ml-4">
            <a href="#" class="hover:text-gray-300">{{ $game['name'] }}</a>
            <div class="text-gray-300 text-sm mt-1">
                {{ Carbon\Carbon::parse($game['first_release_date'])->format('M d,Y') }}</div>
        </div>
    </div>
    @empty
    <div class="spinner mt-8"></div>
    @endforelse
</div>