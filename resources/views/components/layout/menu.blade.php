@section('menu')
<ul class="dropdown-menu">

@foreach ($list_kategori as $kategori)
    <li>
        <a href="index.html">{{ $kategori->nama }}</a>
    </li>
@endforeach
</ul>
@endsection

