@extends('afterlogin')
@section('content')

<div>
    <div class="teks2">
        <h3> <b> Kedalaman Kata </b></h3>
    </div>

    <div class="box-kk">
        <form>
                Kata 1   : <br>
            <input class="input-kk" type="text" name="kata1" placeholder="kata1"><br>
                Kata 2   : <br>
            <input class="input-kk" type="text" name="kata2" placeholder="kata2">
            <br>
            <input class="tombol-kk" type="submit" value="Cari">
        </form> 
    </div>
    </div>
</div>

@endsection