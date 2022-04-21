@extends('template.tmpitcg')

@section('title', 'Forget Password')

@section('bannerpage')

@show


@section('datacontent')




    <div class="main-contentbox">







        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-7 hidden-sm hidden-xs">
                    @include('template.imglogin')
                </div>
                <div class="col-md-5">
                    <h1 class="h1">Probleme Mot de Passe</h1>
                    <form class="form-horizontal" action="{{route('adminpage')}}">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Inserer votre mail">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info">Send</button>
                                <a href="{{route('loginpage')}}" class="btn btn-danger pull-right">Back</a>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>














    </div>

@endsection
