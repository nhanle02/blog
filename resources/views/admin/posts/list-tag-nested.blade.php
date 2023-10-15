<ul style="padding-left: 0">
    @foreach ($childCategories as $category)
        <li class="custom-control custom-checkbox">
            <input class="custom-control-input" value="{{ $category->id }}" 
            @if (!empty($postCategories))
                @foreach ($postCategories as $postCategory)
                    {{ $postCategory->id == $category->id ? 'checked' : ''}}
                @endforeach
            @endif
            name="categories[]" type="checkbox" id="category--{{ $category->id }}">
            <label for="category--{{ $category->id }}" class="custom-control-label">{{ $category->name }}</label>
            @if (!empty($category->childrenCategories))
                @include('admin.posts.list-tag-nested', [
                    'childCategories' => $category->childrenCategories,
                ])
            @endif
        </li>
    @endforeach
</ul>