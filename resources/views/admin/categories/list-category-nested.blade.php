
@foreach ($childrenCategories as $categoryChild)
    <tr>
        <td>{{ $categoryChild->id }}</td>
        <td>{{ $slas . ' ' . $categoryChild->name }}</td>
        <td>
            {{ $categoryChild->slug }}
        </td>
        <td>{{ $categoryChild->count }}</td>
        <td><span class="badge badge-{{ $status[$categoryChild->status]['class']  }}">{{ $status[$categoryChild->status]['label'] }}</span></td>
        <td>
            <a href="{{ route('admin.categories.edit', $categoryChild->id) }}" class="btn btn-info btn-sm">Chỉnh sửa</a>
            <button data-action="{{ route('admin.categories.delete', $categoryChild->id) }}" class="btn btn-danger btn-sm js-display-modal-delete">Xoá</button>
        </td>
    </tr>
    @if (!empty($categoryChild->childrenCategories))
        @include('admin.categories.list-category-nested', [
            'childrenCategories' => $categoryChild->childrenCategories,
            'slas' => $slas . ' --- ',
        ])        
    @endif
@endforeach
