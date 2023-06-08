@section('menu')
    <ul class="dropdown-menu">

        @foreach ($list_kategori as $kategori)
            <li>
                <a href="{{ url("atraksi/$kategori->id") }}">{{ $kategori->nama }}</a>
            </li>
        @endforeach
    </ul>
@endsection

@section('fasilitas')
    <ul class="dropdown-menu">

        @foreach ($list_kategori_fasilitas as $kategori_fasilitas)
            <li>
                <a href="{{ url("fasilitas/$kategori_fasilitas->id") }}">{{ $kategori_fasilitas->nama }}</a>
            </li>
        @endforeach
    </ul>
@endsection
