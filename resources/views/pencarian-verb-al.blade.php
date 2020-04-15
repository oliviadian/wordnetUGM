@extends('afterlogin')
@section('content')

<div class="cari">

      <h2 class="position">Pencarian Verb</h2>
       
  <form class="search" action="{{ action('verbAlController@searchverbal') }}" method="GET">

      <input type="text" placeholder="Search.." name="searchverbal">
      <button><i class="fa fa-search"><a href="/pencarian/verb/al"></a></i></button>
    
  </form>

  @if($kata->count() > 0)

    <h6 class="comment">Hasil pencarian :</h6>

  <div class="card">
    <div class="card-body" style="font-family: -webkit-body;">
                @foreach($kata as $verb)

                <tr>
                    <td> <li> {{ $verb->kata_dasar_v}} </li> </td>
                    <td> {{ $verb->makna_dasar_v}} </td> </br>

                
                      @foreach($verb->hipernim as $hipernim)

                      <td><li>{{$hipernim->hipernim_v}} </li></td>
                      <td>{{$hipernim->makna_hipernim_v}} </td>

                      @endforeach
                  
                </tr>

                @endforeach
        
        </div>
  </div>

    <div>
      <h6 class="comment">Tambahkan komentar</h6>

      <form class="form-group" action="{{ action('tambahKatavController@isi') }}" method="POST">
        @csrf
        <textarea class="form-control" id="isi" rows="3"placeholder="Masukkan komentar atau masukan" name="isi"></textarea>
        <button class="btn btn-primary" type="submit" style="width:100%; margin-top:1%;">Tambahkan</button>
      </form>
    </div>

  @endif

</div>
@endsection