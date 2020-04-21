@extends('afterlogin')
@section('content')

<div class="cari">

      <p class="position">Pencarian Kata Kerja</p>
       
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
                    <td> ➨ {{ $verb->kata_dasar_v}} </td> </br>
                  
                  <div style="padding-left:4%;">
                    <td> {{ $verb->makna_dasar_v}} </td> </br>
                  </div>

                      @foreach($verb->hipernim as $hipernim)

                      &emsp;
                      <td> ➥ {{$hipernim->hipernim_v}} </td>

                  <div style="padding-left:7%;">
                      <td>{{$hipernim->makna_hipernim_v}} </td>
                  </div>

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