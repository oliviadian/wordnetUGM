@extends('welcome')
@section('content')

<div class="cari">

      <img class="img-pos" src="https://ugm.ac.id/images/optimasi/ugm_header.png">
      <h2 class="position">Wordnet UGM</h2>
       
  <form class="search" action="{{ action('verbController@searchverb') }}" method="GET">

      <input type="text" placeholder="Search.." name="searchverb">
      <button><i class="fa fa-search"><a href="/pencarian/verb"></a></i></button>
    
  </form>

  @if (isset($details))

    <h5 class="pencarian"><b>Hasil pencarian : </b></h5>

  <div class="card">
    <div class="card-body" style="font-family: -webkit-body;">
                @foreach($details as $verb)

                    <tr>
                        <td> <li> {{ $verb->kata_dasar_v}} </li> </td>
                        <td> {{ $verb->makna_dasar_v}} </td>
                        
                            
                      
        </div>
  </div>
            @endforeach
            @endif

</div>
@endsection