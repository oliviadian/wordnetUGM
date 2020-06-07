@extends('afterlogin')
@section('content')

<div class="card" style="width: 25rem; margin:2%;">
 
        <div class="card-body" style="padding:5%;">
            <h5 class="card-title" style="margin-left:2%; font-family: Times New Roman; #999898;">Jarak Kata</h5>

            <form style="max-width:60%" method="POST" action="{{ action('jarakController@jarak') }}">
            @csrf
                <input type="text" class="form-control" id="kata1" placeholder="kata1" name="katasatu"></br>
                <input type="text" class="form-control" id="kata2" placeholder="kata2" name="katadua"></br>
                <button type="submit" class="btn btn-primary" style="max-width:60%">Hitung</button></br></br>
                <p style="font-size:12px;">* Jarak kata yang dapat dihitung hanya kata dalam 1 kategori.</p>
                <hr></hr>
            </form>
        </div>

    @if(isset($kedalaman))
        <div style="margin-left:6%; font-family: Times New Roman; color:#818080; padding-bottom:4%;">
            <h7 style="font-family: Times New Roman;">Hasil Pencarian Jarak</h7></br>
            <tr>
                <td> ➥ Jarak : {{$kedalaman}} </td> </br>
            </tr>
        </div>
    
    @elseif ($message = Session::get('error'))
            <p style="margin-left:6%; font-size:12px; color:#FF1C1C; font-weight: bold"> {{ $message }} </p>
        

    @endif
</div>
                
@endsection