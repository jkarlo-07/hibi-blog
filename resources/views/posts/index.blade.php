<x-layout>
    <x-section-heading>All Posts</x-section-heading>
    <div class="flex flex-col gap-6 mt-3 mb-[40px]">
        @foreach ($posts as $post)
            <x-blog-card-wide :post="$post" />
        @endforeach

        <div class="mt-6 mb-6 px-4">
            {{ $posts->links() }}
        </div>


    </div>
</x-layout>
