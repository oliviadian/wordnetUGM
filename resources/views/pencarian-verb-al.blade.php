@extends('afterlogin')
@section('content')

<div class="cari">

      <h2 class="position">Pencarian Verb</h2>
       
  <form class="search" action="{{ action('verbAlController@searchverbal') }}" method="GET">

      <input type="text" placeholder="Search.." name="searchverbal">
      <button><i class="fa fa-search"><a href="/pencarian/verb/al"></a></i></button>
    
  </form>

  @if ($kata)

    <h5 class="pencarian"><b>Hasil pencarian : </b></h5>

  <div class="card">
    <div class="card-body">
                @foreach($kata as $verb)

                <tr>
                    <td> <b> {{ $verb->kata_dasar_v}} </b> </td> </br>
                    <td> {{ $verb->makna_dasar_v}} </td> </br>

                
                      @foreach($verb->hipernim as $hipernim)

                      <td>{{$hipernim->hipernim_v}} </td></br>
                      <td>{{$hipernim->makna_hipernim_v}} </td>

                      @endforeach
                  
                </tr>

                @endforeach
        
        </div>
  </div>

  <div>
      <h6 class="comment">Tambahkan komentar</h6>

      <form action="{{ action('tambahKatavController@isi') }}" method="POST">
        @csrf
        <textarea id="isi" rows="4" cols="50" placeholder="Masukkan komentar atau masukan" name="isi"> </textarea>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
      </form> 
  </div>   

  @endif

</div>
@endsection