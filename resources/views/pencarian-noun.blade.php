@extends('welcome')
@section('content')

<div class="cari">

     
      <h2 class="position">Wordnet UGM</h2>
       
  <form class="search" action="{{ action('nounController@searchnoun') }}" method="GET">

      <input type="text" placeholder="Search.." name="searchnoun">
      <button><i class="fa fa-search"><a href="/pencarian/noun"></a></i></button>
    
  </form>

  @if (isset($details))

    <h5 class="pencarian"><b>Hasil pencarian : </b></h5>

  <div class="card" style="max-width:90%;">
    <div class="card-body" style="font-family: -webkit-body;">
                @foreach($details as $noun)

                    <tr>
                        <td> <li>{{ $noun->kata_dasar_n}} </li> </td>
                        <td> {{ $noun->makna_dasar_n}} </td>
                        
                            
                      
        </div>
  </div>
            @endforeach
            @endif

</div>
@endsection