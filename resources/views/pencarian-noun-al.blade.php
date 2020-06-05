@extends('afterlogin')
@section('content')

<div class="cari">

  
      <h3 style="color: #ffff; font-family: Times New Roman, Times, serif; text-shadow: 2px 2px #1A2C43;"> 
      
      Pencarian Kata Benda 
      
      </h3>
  
       
  <form class="search" action="{{ action('nounAlController@searchnounal') }}" method="GET">

      <input type="text" placeholder="Search.." name="searchnounal">
      <button><i class="fa fa-search"><a href="/pencarian/noun/al"></a></i></button>

  </form>

  @if (isset($details))

    <h6 class="comment">Hasil pencarian : </h6>

  <div class="card">
    <div class="card-body" style="font-family: -webkit-body;">

      @foreach($details as $noun)
        <tr>
            <td> ➨ {{ $noun->kata_dasar_n}} </td> </br>

          <div style="padding-left:4%;">
            <td> {{ $noun->makna_dasar_n}} </td> </br>
          </div>

         
          @foreach($noun->hipernim as $hipernim)

          &emsp;
            <td> 
                 ➥ {{$hipernim->hipernim_n}} 
            </td> </br>

          <div style="padding-left:7%;">
            <td>  {{$hipernim->makna_hipernim_n}} </td>
          </div>

          @endforeach
          </tr>

      @endforeach
                   
        </div>
  </div>


  <div>
 
      <h6 class="comment">Tambahkan komentar</h6>

      <form action="{{ action('tambahKatanController@isi') }}" method="POST">
        @csrf
        <textarea class="form-control" id="isi" rows="3"placeholder="Masukkan komentar atau masukan" name="isi"></textarea>
        <button class="btn btn-primary" type="submit" style="width:100%; margin-top:1%;">Tambahkan</button>
      </form> 
    
  </div>  

  @elseif ($message = Session::get('error'))
        <div class="card" style="max-width:100%; margin-top:2%;">
          <div class="card-header bg-danger text-white"> </div>
        
          <div class="card-body" style="font-size:90%;"> {{ $message }} </div>
      </div>

  @endif
</div>
@endsection