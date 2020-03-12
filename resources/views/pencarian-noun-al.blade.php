@extends('afterlogin')
@section('content')

<div class="cari">

      <img class="img-pos" src="https://ugm.ac.id/images/optimasi/ugm_header.png">
      <h2 class="position">Wordnet UGM</h2>
       
  <form class="search" action="{{ action('nounAlController@searchnounal') }}" method="GET">

      <input type="text" placeholder="Search.." name="searchnounal">
      <button><i class="fa fa-search"><a href="/pencarian/noun/al"></a></i></button>
    
  </form>

  @if ($kata)

    <h5 class="pencarian"><b>Hasil pencarian : </b></h5>

  <div class="card">
    <div class="card-body">
    @foreach($kata as $noun)
        <tr>
            <td> <b> {{ $noun->kata_dasar_n}} </b> </td> </br>
            <td> {{ $noun->makna_dasar_n}} </td> </br>

         
              @foreach($noun->hipernim as $hipernim)
            <td>{{$hipernim->hipernim_n}} </td></br>
            <td>{{$hipernim->makna_hipernim_n}} </td>

              @endforeach
           
        </tr>
        @endforeach
                   
        </div>
  </div>
  @endif
            

</div>
@endsection