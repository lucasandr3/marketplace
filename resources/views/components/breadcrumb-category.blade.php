@if(isset($filter->category))
    <li> <a href="{{route('category.products', $filter->category->slug)}}">{{$filter->category->name}}</a></li>
@endif
@if(isset($filter->department))
    <li> <a href="{{route('category.departments.products', $filter->department->slug)}}">{{$filter->department->name}}</a></li>
@endif
@if(isset($filter->division))
    <li> <a href="{{route('category.divisions.products', $filter->division->slug)}}">{{$filter->division->name}}</a></li>
@endif

@if(isset($filter->product))
    <li> <a href="javascript:void(0)" style="color: #5b9909"><strong>{{$filter->product->name}}</strong></a></li>
@endif
