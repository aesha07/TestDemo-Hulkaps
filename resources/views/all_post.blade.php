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
    <style type="text/css">
        .label-default{background-color: #ffc107;padding: 2px 5px;}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert text-right">
                <a  href="{{ url('/home') }}" class="btn btn-success">Home</a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body table-responsive" style="margin-top: 20px;">
                    <table class="table table-bordered table-striped datatable" id="showpostall">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Description</th>
                                <th>Tags</th>
                                <th> </th>
                            </tr>
                        </thead>
        
                        <tbody>
                            @if (count($posts) > 0)
                                @foreach ($posts as $post)
                                    <tr data-entry-id="{{ $post->id }}">
                                        <td field-key='title'>{{ $post->title }}</td>
                                        <td field-key='author'>{{ $post->author }}</td>
                                        <td field-key='description'>{{ $post->description }}</td>
                                        <td field-key='tag'>
                                            @foreach ($post->tag as $singleTag)
                                                <span class="label label-default">{{ $singleTag->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('allpost.show',$post->id)}}" class="btn btn-xs btn-primary">View</a>
                                            
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8">No Records</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                
            </div>
             
        </div>
        
    </div>
    

</body>
<script type="text/javascript">
    $(document).ready(function() { 
  $('#showpostall').DataTable({
    "iDisplayLength": 2
  }); 
})
</script>
</html>




