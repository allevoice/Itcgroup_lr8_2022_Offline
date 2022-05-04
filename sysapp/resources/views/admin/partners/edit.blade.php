@extends('template.thermadmin')

@section('title', 'Partner')

@section('admincontenent')
    <div class="col-md-12">
        <h2>
            Editer {{$data->titlepartner}}
            <a href="{{route('listpartner')}}" class="btn btn-md btn-primary"><i class="glyphicon glyphicon-arrow-left"></i></a>
        </h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="col-md-6 col-sm-4">

                    <div class="col-sm-12">
                        @if ($data->backimgpartner == NULL)
                            <img src="{{asset('assets/img/partners/services-img1.jpg')}}" class="img-thumbnail">
                        @else
                            <img src="{{asset('assets/img/partners/')}}/{{$data->backimgpartner}}" class="img-thumbnail">
                        @endif
                        <div>
                            <a href="#" class="btn btn-xs btn-info" data-toggle="modal" data-target="#back_{{$data->id}}">Edit</a>
                        </div>
                        <span id="helpBlock" class="help-block">
                             @error('backimgpartner')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        <strong>Background image</strong>
                        Accept les format suivant PNG, JPG, JPEG...
                        </span>
                    </div>

                    <div class="col-sm-12">
                        @if ($data->backimgpartner == NULL)
                            <img src="{{asset('assets/img/partners/defalut.png')}}" class="img-thumbnail" style="width:80">
                        @else
                            <img src="{{asset('assets/img/partners/')}}/{{$data->imgpartner}}" class="img-thumbnail" style="width:80">
                        @endif
                        <div>
                            <a href="#" class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModal">Edit</a>
                        </div>
                        <span id="helpBlock" class="help-block">
                        <strong>Logo</strong>
                        Accept les format suivant PNG, JPG
                        </span>
                    </div>
            </div>

            <div class="col-md-6 col-sm-8">
                <div>
                    <a href="#" class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModal">Edit</a>
                </div>
                <div class="form-horizontal col-sm-12">

                    <div class="form-group @error('titlev') is-invalid @enderror">
                        <label for="inputEmail3" class="col-sm-3 control-label">Titre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="titlev" value="{{$data->titlepartner}}  {{old('titlev')}}" placeholder="Titre De l'info bulble">
                            {{--@error('titlev')--}}
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            {{--@enderror--}}
                        </div>
                    </div>


                    <div class="form-group @error('descdetail') is-invalid @enderror">
                        <label for="inputEmail3" class="col-sm-3 control-label">Contenue</label>
                        <div class="col-sm-9">
                            <textarea class="form-control"  rows="3" name="descdetail" placeholder="Votre contenu" >{{$data->servicepartner}}</textarea>
                            {{--@error('descdetail')--}}
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            {{--@enderror--}}
                        </div>
                    </div>

                    <div class="form-group @error('linkv') is-invalid @enderror">
                        <label for="inputEmail3" class="col-sm-3 control-label">link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="linkv" value="{{$data->linkpartner}}" placeholder="url du site">
                            {{--@error('linkv')--}}
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            {{--@enderror--}}
                        </div>
                    </div>


                    <div class="form-group @error('linkv') is-invalid @enderror">
                        <label for="inputEmail3" class="col-sm-3 control-label">Statut</label>
                        <div class="col-sm-9">
                            {{$data->status}}
                            <label>
                                <select class="form-control" name="stv">
                                    <option value="1">Active</option>
                                    <option value="" selected>Desactive</option>
                                </select>
                            </label>
                        </div>
                    </div>

                    <div class="form-group @error('linkv') is-invalid @enderror">
                        <label for="inputEmail3" class="col-sm-3 control-label">Level</label>
                        <div class="col-sm-9">
                            <label>
                                <span class="btn-info"> {{$data->level}}</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group @error('linkv') is-invalid @enderror">
                        <label for="inputEmail3" class="col-sm-3 control-label">Langues</label>
                        <div class="col-sm-9">
                            <label>
                                <span class="btn-info"> EN {{$data->langues}}</span>
                            </label>
                        </div>
                    </div>



                <div class="form">
                        <div class="col-xs-6 pull-right">
                            <label>
                                <a href="{{route('listpartner')}}" class="btn btn-danger" type="button">Retour</a>
                            </label>
                        </div>
                </div>

            </div>
<form method="post" action="{{route('addupdpartner',$data->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
{{--Mise a jours de background--}}

<div class="modal fade" id="back_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Background Modification</h4>
            </div>
            <div class="modal-body">
                @if ($data->backimgpartner == NULL)
                    <img src="{{asset('assets/img/partners/services-img1.jpg')}}" class="img-thumbnail">
                @else
                    <img src="{{asset('assets/img/partners/')}}/{{$data->backimgpartner}}" class="img-thumbnail">
                @endif
                
                <div>
                    <input type="text" name="id" value="{{$data->id}}">
                    <input type="text" name="indice" value="1">
                    <input type="file" name="backimgpartner">
                </div>
                <span id="helpBlock" class="help-block">
                Accept les format suivant PNG, JPG, JPEG...
                </span>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
{{--Mise a jours de background--}}

{{--Mise a jours de Logo--}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
{{--Mise a jours de Logo--}}

{{--Mise a jours de Text--}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
{{--Mise a jours de Text--}}


</form>







            </div>



@endsection
