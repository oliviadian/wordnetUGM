@extends('afterlogin')
@section('content')

<div class="cari">

      <img class="img-pos" src="https://ugm.ac.id/images/optimasi/ugm_header.png">
      <h2 class="position">Wordnet UGM</h2>
       
  <form class="search" action="{{ action('verbAlController@searchverbal') }}" method="GET">

      <input type="text" placeholder="Search.." name="searchverbal">
      <button><i class="fa fa-search"><a href="/pencarian/verb/al"></a></i></button>
    
  </form>

  @if (isset($details))

    <h5 class="pencarian"><b>Hasil pencarian : </b></h5>

  <div class="card">
    <div class="card-body">
                @foreach($details as $verb)

                    <tr>
                        <td> <b> {{ $verb->kata_dasar_v}} </b> </td> </br>
                        <td> {{ $verb->makna_dasar_v}} </td>
                        
                            
                      
        </div>
  </div>
            @endforeach
            @endif

</div>
@endsection