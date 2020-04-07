@extends('adminHome')
@section('content')

<div class="tabelpost">

<table>
    <tr>
        <th>Komentar Noun</th>
    </tr>

    <tr> 
            <td> 
                @foreach($hasilnoun as $masukannoun)
                    <li>{{$masukannoun->isi}}</li>
                @endforeach
            </td>
    </tr>
</table>

</div>

@endsection