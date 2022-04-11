<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css"
      integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
      integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container mt-3">
    <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          {{$posts->title}}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$posts->author}}</h5>
          <p class="card-text">{{$posts->description}}</p>
          @foreach ($posts->tag as $singleTag)
              <span class="label label-default">{{ $singleTag->name }}</span>
          @endforeach
        </div>
        <div class="card-header">
          <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">{{ count($comments) }}<i class="fa fa-comment" aria-hidden="true"></i></a>
          <div class="collapse pt-2" id="multiCollapseExample1">
            <div class="card card-body">
              @foreach ($comments as $comment)
                  <div style="border: 1px solid #cccc; border-radius: 6px; padding: 5px 0; margin-bottom: 3px;">{{ $comment->comment }}</div>
              @endforeach
              @if(\Auth::id())
              <div class="d-flex">
                {!! Form::open(['method' => 'POST', 'route' => ['allpost.store']]) !!}
                <div class="d-flex">
                {!! Form::text('comment', old('comment'), ['class' => 'form-control', 'placeholder' => 'Enter comment']) !!}
                {{ Form::hidden('posts_id', $posts->id) }}
                
               {!! Form::submit('Sent', ['class' => 'btn btn-danger']) !!}
               </div>
               @endif
                {!! Form::close() !!}
               <!-- <button class="ml-1" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button> -->
              </div>
            </div>
          </div>
         

        </div>
      </div>
      
    </div>
  </div>
    
  </div>
  
  

</body>
</html>
