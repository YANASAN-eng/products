@extends('/layouts/frame')

@section('contents')
    <ul>
        @php foreach($programmingMenus as $menu): @endphp
            @php echo "<li><a href=''>".$menu."</a></li>" @endphp
        @php endforeach @endphp
    </ul>
@endsection