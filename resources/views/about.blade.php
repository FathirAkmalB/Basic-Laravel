@extends('layouting.main')


@section('container')
    <h3>About</h3>
    <section style="margin-top: 40px;">
        <h4>Hi {{ $username }} !</h4>
        <p>Selamat datang di Starby!</p>
        <div class="flex" style="width: 600px; display: flex; justify-content: space-between; align-items: center;">
            <img src="img/{{ $picture }}" alt="{{ $picture }} tidak ada  :(" style="border-radius: 10px"
                width="250px">
            <p style="max-width: 300px"> Pekenalkan saya adalah CO Founder dari <span style="font-weight: 500; color:rgba(1, 132, 219, 0.733)">Starby Company!</span></p>
        </div>
    </section>
@endsection