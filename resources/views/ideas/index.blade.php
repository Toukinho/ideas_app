<x-layout title="My Ideas">
    <h1 class="font-bold text-4xl px-2 py-4">Your Ideas:</h1>

    <ul class="flex flex-wrap gap-4 justify-center">
        @forelse ($ideas as $idea)
            <a href="ideas/show/{{ $idea->id }}">
                <li>
                    <div class="card w-96 h-64 bg-base-200 shadow-sm flex
                    flex-col">
                        <div class="card-body flex flex-col">
                            <h2 class="card-title line-clamp-2">
                                {{ $idea->title }}
                            </h2>

                            <p class="line-clamp-3 grow">
                                {{ $idea->description }}
                            </p>
                        </div>
                    </div>
                </li>
            </a>
        @empty
            <p>No Ideas at this time.</p>
        @endforelse
    </ul>
</x-layout>
