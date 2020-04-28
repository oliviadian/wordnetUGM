@extends('afterlogin')
@section('content')

<div class="cari">

      <img class="img-pos" src="https://ugm.ac.id/images/optimasi/ugm_header.png">
      <h2 class="position">Wordnet UGM</h2>
       
  <form class="search" action="{{ action('nounController@search') }}" method="GET">

      <input type="text" placeholder="Search.." name="search">
      <button><i class="fa fa-search"><a href="/usersearch"></a></i></button>
    
  </form>

  @if (isset($details))

    <h5 class="pencarian"><b>Hasil pencarian : </b></h5>

  <div class="card">
    <div class="card-body">
                @foreach($details as $noun)

                    <tr>
                        <td> <b> {{ $noun->kata_dasar_n}} </b> </td> </br>
                        <td> {{ $noun->makna_dasar_n}} </td>
                        
                            
                      
        </div>
  </div>
            @endforeach
            @endif

</div>
@endsection