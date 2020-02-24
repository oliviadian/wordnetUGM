@extends('welcome')
@section('content')

<div class="cari">

      <img class="img-pos" src="https://ugm.ac.id/images/optimasi/ugm_header.png">
      <h2 class="position">Wordnet UGM</h2>
       
  <form class="search" action="{{ action('nounController@search') }}" method="GET">

      <input type="text" placeholder="Search.." name="search">
      <button><i class="fa fa-search"><a href="/usersearch"></a></i></button>
    
  </form>

  @if (isset($details))

            @foreach($details as $user)
                <tr>
                    <td> {{ $user->kategori}} </td>
            @endforeach
            @endif

</div>
@endsection