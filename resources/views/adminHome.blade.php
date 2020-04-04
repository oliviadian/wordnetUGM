@extends('afterlogin')
   
@section('content')

            <div class="tabelpost">

                <h6 class="comment">Hasil Masukan dan Komentar</h6>

                <table>
                    <tr>
                        <th>Komentar Noun</th>
                        <th>Komentar Verb</th>
                    </tr>
                    <tr>
                        <td> 
                            @foreach($hasilnoun as $masukannoun)
                                <li>{{$masukannoun->isi}}</li>
                            @endforeach
                        </td>

                        <td> 
                            @foreach($hasilverb as $masukanverb)
                                <li>{{$masukanverb->isi}}</li>
                            @endforeach
                        </td>
                    </tr>
                </table>

            </div>
        
@endsection