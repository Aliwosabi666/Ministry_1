@if($errors->any()) 
    <div class="alert alert-danger">
        <ul style="text-align:center;">
            @foreach($errors->all() as $error) 
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success" style="text-align:center;">
        {{session('status')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" style="text-align:center;">
        {{session('error')}}
    </div>
@endif