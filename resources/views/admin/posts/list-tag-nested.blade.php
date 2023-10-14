<ul style="padding-left: 0">
    @foreach ($childCategories as $category)
        <li class="custom-control custom-checkbox">
            <input class="custom-control-input" value="{{ $category->id }}" name="categories[]" type="checkbox" id="category--{{ $category->id }}">
            <label for="category--{{ $category->id }}" class="custom-control-label">{{ $category->name }}</label>
            @if (!empty($category->childrenCategories))
                @include('admin.posts.list-tag-nested', [
                    'childCategories' => $category->childrenCategories,
                ])
            @endif
        </li>
    @endforeach
</ul>