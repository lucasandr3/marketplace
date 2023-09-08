@foreach($categories as $category)
    <li>
        <a href="{{route('category.products', $category->slug)}}">
            <strong>{{$category->name_category}}</strong>
        </a>
    </li>
    @foreach($category->departments() as $department)
        <li>
            <a href="{{route('category.departments.products', $department->slug)}}"> -- {{$department->name_department}}</a>
        </li>
    @endforeach
    @foreach($department->divisions() as $division)
        <li><a href="{{route('category.divisions.products', $division->slug)}}"> -- -- {{$division->name_division}}</a></li>
    @endforeach
@endforeach
