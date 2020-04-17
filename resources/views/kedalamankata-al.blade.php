@extends('afterlogin')
@section('content')

<div class="card" style="width: 25rem; margin:2%;">
 
        <div class="card-body" style="padding:5%;">
            <h5 class="card-title" style="margin-left:5%;">Kedalaman Kata</h5>
                <div class="col-sm-8">          
                    <input type="text" class="form-control" id="kata1" placeholder="kata1" name="kata1"></br>
                    <input type="text" class="form-control" id="kata2" placeholder="kata2" name="kata2">
                </div> </br>
            
            <a href="#" class="btn btn-primary" style="margin-left:5%;">Hitung</a>
        </div>
    
</div>

@endsection