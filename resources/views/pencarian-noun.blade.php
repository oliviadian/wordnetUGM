@extends('welcome')
@section('content')

<div class="cari" >

     
<h3 style="color: #ffff; font-family: Times New Roman, Times, serif;  text-shadow: 2px 2px #1A2C43;"> 
      
      Pencarian Kata Benda
      
      </h3>
       
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
                 @endforeach     
                            
                      
        </div>
  </div>

  @else

    <div class="card" style="max-width:100%; margin-top:2%;">

          <div class="card-header bg-danger text-white"></div>
        
          <div class="card-body" style="font-size:90%;">
              Maaf kata yang anda cari belum terdapat di basis data kami.
          </div>

    </div>

  @endif

</div>
@endsection