@extends('template.thermadmin')

@section('title', 'Slide')

@section('admincontenent')
    <div class="col-md-12">
        <h2>
            Partners Shows liste
            <a href="#" class="btn btn-md btn-primary">+</a>
        </h2>


        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">

                    {{ $partner->links('pagination::bootstrap-4') }}

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Logo</th>
                            <th>Titre</th>
                            <th class="row visible-lg">Service</th>
                            <th class="row visible-lg">Link</th>
                            <th class="row visible-lg">Status</th>
                            <th class="row visible-lg">Level</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>


                        @forelse ($partner as $show)
                            <tr  class="odd gradeX
                            @if ($show->status == NULL and $show->status == 0 and empty($show->status))
                                danger
                            @endif
                                ">

                                <td class="center">
                                    @if ($show->backimgpartner == NULL)
                                        <img src="{{asset('assets/img/partners/services-img1.jpg')}}" class="img-thumbnail" style="width:80">
                                    @else
                                        <img src="{{asset('assets/img/partners/')}}/{{$show->backimgpartner}}" class="img-thumbnail" style="width:80">
                                    @endif
                                </td>

                                <td class="center">
                                        <img src="{{asset('assets/img/partners/')}}/{{$show->imgpartner}}" class="img-circle">
                                </td>

                                <td>{{$show->titlepartner}}</td>

                                <td class="row visible-lg">
                                    {{Str::limit($show->servicepartner, 20)}}
                                </td>
                                <td class="row visible-lg">{{$show->linkpartner}}</td>
                                <td class="row visible-lg">{{$show->status}}</td>
                                <td class="row visible-lg">{{$show->level}}</td>

                                <td>
                                    {{$show->id}}

                                    <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal_view_{{$show->id}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="{{route('editpartner',$show->id)}}" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>



                            <div class="modal fade" id="myModal_view_{{$show->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">{{$show->titlepartner}}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-sm-4">
                                                    @if ($show->backimgpartner == NULL)
                                                        <img src="{{asset('assets/img/partners/services-img1.jpg')}}" class="img-thumbnail" style="width:80">
                                                    @else
                                                        <img src="{{asset('assets/img/partners/')}}/{{$show->backimgpartner}}" class="img-thumbnail" style="width:80">
                                                    @endif
                                                </div>

                                                <div class="col-sm-8">

                                                    <div class="form-horizontal">

                                                        <div class="form-group">
                                                            <img src="{{asset('assets/img/partners/')}}/{{$show->imgpartner}}" class="img-circle">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Titre</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{$show->titlepartner}}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Link</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{$show->linkpartner}}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Services</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" rows="3" cols="30">{{$show->servicepartner}}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-3 control-label">Status</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{$show->status}}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Level</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{$show->level}}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">User</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{$show->iduser}}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Inscrit</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{$show->created_at}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Update</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{$show->updated_at}}" readonly>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>










                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        @empty
                            <tr>
                                <td colspan="9"> <center>No data</center> </td>
                            </tr>

                        @endforelse

                        </tbody>
                    </table>


                    {{ $partner->links('pagination::bootstrap-4') }}




                    </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>




    </div>



@endsection