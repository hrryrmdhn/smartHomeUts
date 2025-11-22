<!DOCTYPE html>
<html>
<head>
    <title>Smart Home Control</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .card {
            border: 1px solid #ccc;
            width: 200px;
            padding: 20px;
            text-align: center;
            margin: 10px;
            border-radius: 12px;
            display: inline-block;
        }
        .on { background: lightgreen; }
        .off { background: #ffb3b3; }
        button { padding: 10px; }
    </style>
</head>

<body>
<h2>Smart Home Control</h2>

<div id="devices">
    @foreach($devices as $d)
    <div class="card {{ $d->state ? 'on' : 'off' }}" id="card-{{ $d->id }}">
        <h4>{{ $d->label }}</h4>
        <button onclick="toggleDevice({{ $d->id }})">
            {{ $d->state ? 'Turn Off' : 'Turn On' }}
        </button>
    </div>
    @endforeach
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function toggleDevice(id){
    $.ajax({
        url: '/toggle/' + id,
        type: 'POST',
        data: {_token: $('meta[name="csrf-token"]').attr('content')},
        success: function(res){
            let card = $("#card-"+id);
            if(res.state == 1){
                card.removeClass('off').addClass('on');
                card.find('button').text("Turn Off");
            } else {
                card.removeClass('on').addClass('off');
                card.find('button').text("Turn On");
            }
        }
    });
}
</script>

</body>
</html>
