@extends('adminHome')
@section('content')

<div class="tabelpost">

    <table>
        <tr>
            <th>Komentar Verb</th>
        </tr>

        <tr>
            <td> 
                @foreach($hasilverb as $masukanverb)
                    <li>{{$masukanverb->isi}}</li>
                @endforeach
            </td>
        </tr>
    </table>

    </div>

@endsection