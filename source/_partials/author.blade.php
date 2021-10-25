<div class="flex items-center">
    <a href="{{ $author_url }}" aria-label="Author" title="Author" class="mr-3">
        {!! $page->image("/assets/images/" . $author_image, 40, 40, ['title' => "", 'alt' => "avatar", 'class' => 'object-cover w-10 h-10 rounded-full shadow-sm', 'resize' => true]) !!}
    </a>
    <div>
        <a href="{{ $author_url }}" aria-label="Author" title="Author" class="font-semibold text-gray-800 transition-colors duration-200 hover:text-yellow-400">{{ $author_name }}</a>
        <p class="text-sm font-medium leading-4 text-gray-600">Author</p>
    </div>
</div>