@extends('welcome')
@section('content')

<div class="cari" style="max-width:30%;">

     
      <p class="position">Pencarian Kata Benda</p>
       
  <form class="search" action="{{ action('nounController@searchnoun') }}" method="GET">

      <input type="text" placeholder="Search.." name="searchnoun">
      <button><i class="fa fa-search"><a href="/pencarian/noun"></a></i></button>
    
  </form>

  @if (isset($details))

    <h5 class="pencarian"><b>Hasil pencarian : </b></h5>

  <div class="card" >
    <div class="card-body" style="font-family: -webkit-body;">
                @foreach($details as $noun)

                    <tr>
                        <td> ➨ {{ $noun->kata_dasar_n}} </td>

                      <div style="padding-left:4%;">
                        <td> {{ $noun->makna_dasar_n}} </td>
                      </div>
                        
                            
                      
        </div>
  </div>
            @endforeach
            @endif

</div>
@endsection