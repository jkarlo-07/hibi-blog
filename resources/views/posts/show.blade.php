<x-layout>
    <div class="mx-[100px] flex flex-col gap-2">
        <div>
            @foreach ($post->tags as $tag)
                <x-tag>{{ $tag->name }}</x-tag>
            @endforeach
        </div>
        <h4 class="text-4xl font-bold">{{ $post['title'] }}</h4>
        <p>{{ $post->date_uploaded() }} &middot; 11 min read</p>
        <div>
            <img src="{{ $post->cover_img }}" alt="" class="w-full h-[300px] object-cover rounded-md shadow-md">
        </div>
        <div class="flex gap-3 items-center">
            <img src="https://picsum.photos/seed/{{ rand(0, 10000) }}/300/200" alt=""
                class="w-[42px] h-[42px] object-cover rounded-full">
            <p class="text-base font-bold">{{ $post->user->name }}</p>
        </div>
        <div class="mt-[20px]">
            <p class="text-gray-600">{{ $post['content'] }}</p>
        </div>
    </div>
</x-layout>
