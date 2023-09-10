{{--@foreach($categories as $category)--}}
{{--    <li>--}}
{{--        <a href="{{route('category.products', $category->slug)}}">--}}
{{--            <strong>{{$category->name_category}}</strong>--}}
{{--        </a>--}}
{{--    </li>--}}
{{--    @foreach($category->departments() as $department)--}}
{{--        <li>--}}
{{--            <a href="{{route('category.departments.products', $department->slug)}}"> -- {{$department->name_department}}</a>--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--    @foreach($department->divisions() as $division)--}}
{{--        <li><a href="{{route('category.divisions.products', $division->slug)}}"> -- -- {{$division->name_division}}</a></li>--}}
{{--    @endforeach--}}
{{--@endforeach--}}

<ul class="tree">
    @foreach($categories as $category)
    <li>
        <details open>
            <summary class="category-principal">
                <a href="{{route('category.products', $category->slug)}}">{{$category->name_category}}</a>
            </summary>
            <ul>
                @foreach($category->departments() as $department)
                <li>
                    <details open>
                        <summary class="department-principal">
                            <a href="{{route('category.departments.products', $department->slug)}}">{{$department->name_department}}</a>
                        </summary>
                        <ul>
                            @foreach($department->divisions() as $division)
                            <li>
                                <a href="{{route('category.divisions.products', $division->slug)}}" style="text-decoration: none;border-right: none;">{{$division->name_division}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </details>
                </li>
                @endforeach
            </ul>
        </details>
    </li>
    @endforeach
</ul>
