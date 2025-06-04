<x-layout>
    <section class="mt-10 text-center w-[fit-content] mx-auto">
        <div class="text-center mb-[20px]">
            <h1 class="text-4xl text-cyan-teal font-bold">HibiBlog</h1>
            <p>A blog about food, experiences, and recipes.</p>
        </div>
        <input type="text"
            class="py-2 px-5 w-full border-2 border-[#DDDDDD] rounded-md focus:outline-none focus:border-cyan-teal disabled:bg-gray-100 disabled:cursor-not-allowed"
            placeholder="Search for articles" />
    </section>

    <section class="mt-[50px]">
        <x-section-heading>Featured Posts</x-section-heading>
        <div class="flex gap-x-[4rem] gap-y-[2rem] flex-wrap mt-[20px]">
            @foreach ($featured_posts as $post)
                <x-blog-card :post="$post" />
            @endforeach
        </div>
        <div class="mt-[10px]">
            <x-arrow-link link="/blogs">View All Posts</x-arrow-link>
        </div>
    </section>
    <section class="mt-[50px]">
        <x-section-heading>Recent Posts</x-section-heading>
        <div class="flex flex-col gap-6">
            @foreach ($recent_posts as $post)
                <x-blog-card-wide :post="$post" />
            @endforeach
        </div>
        <div class="mt-[10px]">
            <x-arrow-link link="/blogs">View All Recent Posts</x-arrow-link>
        </div>
    </section>
</x-layout>
