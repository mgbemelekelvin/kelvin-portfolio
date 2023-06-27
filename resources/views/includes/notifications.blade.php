@if(count($errors))
<div class="alert alert-custom alert-danger fade show" role="alert">
    <i class="fa fa-exclamation" aria-hidden="true"></i>
    <strong>Failed!</strong><br>
    <ul>
        @foreach($errors->all() as $error)
            <li class="alert-text">{!! $error !!}</li>
        @endforeach
    </ul>
</div>
@endif

@if($message = Session::get('failed'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="fa fa-exclamation" aria-hidden="true"></i>
    <strong>Failed!</strong><br>
    <div class="alert-text">
        @if(is_array($message))
            <ul>
                @foreach($message as $msg)
                    <li>{!! $msg !!}</li>
                @endforeach
            </ul>
        @else
            {!! $message !!}
        @endif
    </div>
</div>
@endif

@if($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="icon-copy fa fa-check-circle" aria-hidden="true"></i>
    <strong>Success!</strong>
    <div class="alert-text">
        @if(is_array($message))
            <ul>
                @foreach($message as $msg)
                    <li>{!! $msg !!}</li>
                @endforeach
            </ul>
        @else
            {!! $message !!}
        @endif
    </div>
</div>
@endif

@if($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="icon-copy fa fa-warning" aria-hidden="true"></i>
    <strong>Warning!</strong>
    <div class="alert-text">
        @if(is_array($message))
            <ul>
            @foreach($message as $msg)
                    <li>{!! $msg !!}</li>
            @endforeach
            </ul>
        @else
            {!! $message !!}
        @endif
    </div>
</div>
@endif

@if($message = Session::get('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <i class="icon-copy fa fa-info-circle" aria-hidden="true"></i>
    <strong>Info</strong>
    <div class="alert-text">
        @if(is_array($message))
            <ul>
                @foreach($message as $msg)
                    <li>{!! $msg !!}</li>
                @endforeach
            </ul>
        @else
            {!! $message !!}
        @endif
    </div>
</div>
@endif
