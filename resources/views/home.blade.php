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
        <x-section-heading>Featured Blogs</x-section-heading>
        <div class="flex gap-x-[4rem] gap-y-[2rem] flex-wrap mt-[20px]">
            @foreach ($posts as $post)
                <x-blog-card :post="$post" />
            @endforeach
        </div>
    </section>
</x-layout>
