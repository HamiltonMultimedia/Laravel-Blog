<x-layout>
    @include ('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
            <p class="text-center">Check out my <span class="text-blue-500"><a href="https://github.com/HamiltonMultimedia/Laravel-Blog" target="_blank">code</a></span> & my acutal blog is located <span class="text-blue-500"><a href="https://terencehamilton.com/blog/my-runbook/" target="_blank">here.</a></span></p>
        @endif
    </main>
</x-layout>
