@props(['post'])

<div class="flex bg-white gap-6 rounded-xl overflow-hidden w-full mx-auto items-center border-1 border-color-main">
    <img src="{{ $post->cover_img }}" alt="Post image" class="w-1/4 object-cover">
    <div class="w-2/4 flex-1">
        <h2 class="text-xl font-bold">{{ $post->title }}</h2>
        <p class="text-sm text-gray-600">
            {{ $post->content }}
        </p>
        <div class="mt-[0.5rem] flex gap-2">
            @foreach ($post->tags as $tag)
                <x-tag size="small">{{ $tag->name }}</x-tag>
            @endforeach
        </div>
    </div>

    <div class="w-1/4 p-4 flex flex-col justify-between items-end text-right text-sm">
        <div>
            <p class="font-medium">{{ $post->user->name }}</p>
            <p class="text-gray-500">{{ $post->date_uploaded() }}</p>
        </div>
        <a href="#" class="text-blue-500 hover:underline mt-4">Read more →</a>
    </div>
</div>
