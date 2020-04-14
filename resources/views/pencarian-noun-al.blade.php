@extends('afterlogin')
@section('content')

<div class="cari">

      <h2 class="position">Pencarian Noun</h2>
       
  <form class="search" action="{{ action('nounAlController@searchnounal') }}" method="GET">

      <input type="text" placeholder="Search.." name="searchnounal">
      <button><i class="fa fa-search"><a href="/pencarian/noun/al"></a></i></button>
    
  </form>

  @if ($kata)

    <h6 class="comment">Hasil pencarian : </h6>

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

  <div>
      <h6 class="comment">Tambahkan komentar</h6>

      <form action="{{ action('tambahKatanController@isi') }}" method="POST">
        @csrf
        <textarea class="form-control" id="isi" rows="3"placeholder="Masukkan komentar atau masukan" name="isi"></textarea>
        <button class="btn btn-primary" type="submit" style="width:100%; margin-top:1%;">Tambahkan</button>
      </form> 
  </div>   
  
  @endif
            

</div>
@endsection