@extends('afterlogin')
@section('content')

<div class="card" style="width: 25rem; margin:2%;">
 
        <div class="card-body" style="padding:5%;">
            <h5 class="card-title" style="margin-left:2%; font-family: Times New Roman; #999898;">Jarak Kata</h5>

            <form style="max-width:60%" method="POST" action="{{ action('jarakController@jarak') }}">
            @csrf
                <input type="text" class="form-control" id="kata1" placeholder="kata1" name="katasatu"></br>
                <input type="text" class="form-control" id="kata2" placeholder="kata2" name="katadua"></br>

                <button type="submit" class="btn btn-primary" style="max-width:60%">Hitung</button>
            </form>
        </div>

    @if(isset($kedalaman))
        <div style="margin-left:6%; font-family: Times New Roman; color:#818080; padding-bottom:4%;">
            <h6 style="font-family: Times New Roman;">Hasil Pencarian Jarak</h6>
            <tr>
                <td> ➥ Jarak : {{$kedalaman}} </td> </br>

            </tr>
        </div>

    </div>
    @endif
                
@endsection