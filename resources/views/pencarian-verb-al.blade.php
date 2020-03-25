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
  
  @endif

</div>
@endsection