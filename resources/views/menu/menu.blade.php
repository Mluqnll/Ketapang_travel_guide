@section('menu')
    <ul class="dropdown-menu">

        @foreach ($list_kategori as $kategori)
            <li>
                <a href="{{ url("atraksi-wisata/$kategori->id") }}">{{ $kategori->nama }}</a>
            </li>
        @endforeach
    </ul>
@endsection
