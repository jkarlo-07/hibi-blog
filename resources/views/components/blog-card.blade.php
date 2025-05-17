@props(['post'])

<div class="flex flex-col w-[calc(50%-2rem)] gap-[0.5rem] leading-[1.15]">
    <img src="{{ $post->cover_img }}" alt="" class="w-full h-[250px] object-cover rounded-md">

    <div class="p-0 m-0 flex items-start gap-1.5">
        @foreach ($post->tags as $tag)
            <x-tag>{{ $tag->name }}</x-tag>
        @endforeach

    </div>
    <h4 class="text-2xl font-bold">{{ $post['title'] }}</h4>
    <p>{{ $post->date_uploaded() }} &middot; 11 min read</p>
    <p>{{ $post['content'] }}</p>
    <div class="flex gap-3 items-center">
        <img src="https://picsum.photos/seed/{{ rand(0, 10000) }}/300/200" alt=""
            class="w-[42px] h-[42px] object-cover rounded-full">
        <p class="text-base font-bold">{{ $post->user->name }}</p>
    </div>
</div>
