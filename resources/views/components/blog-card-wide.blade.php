@props(['post'])

<div class="relative group transform transition-transform duration-300 ease-in-out hover:scale-[1.02] hover:shadow-md cursor-pointer bg-white gap-6 rounded-xl overflow-hidden w-full mx-auto items-center border border-color-main flex">
    <a href="/posts/{{ $post->id }}" class="absolute inset-0 z-[100]"></a>

    <img src="{{ $post->cover_img }}" alt="Post image" class="w-1/4 object-cover h-full">

    <div class="w-2/4 flex-1 z-20">
        <h2 class="text-xl font-bold">{{ $post->title }}</h2>
        <p class="text-sm text-gray-600">
            {{ $post->content }}
        </p>
        <div class="mt-2 flex gap-2 flex-wrap">
            @foreach ($post->tags as $tag)
                <x-tag size="small">{{ $tag->name }}</x-tag>
            @endforeach
        </div>
    </div>

    <div class="w-1/4 p-4 flex flex-col justify-between items-end text-right text-sm z-20">
        <div>
            <p class="font-medium">{{ $post->user->name }}</p>
            <p class="text-gray-500">{{ $post->date_uploaded() }}</p>
        </div>
        <span class="text-blue-500 group-hover:underline mt-4">Read more →</span>
    </div>
</div>
