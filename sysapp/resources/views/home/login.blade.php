@extends('template.tmpitcg')

@section('title', 'Login')

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
                    <h1 class="text-center" style="color:black">Connexion </h1>
                    <form class="form-horizontal" action="{{route('adminpage')}}">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info">Sign in</button>

                                <a href="{{route('forgetpass')}}" class="text-center pull-right">I forgot my password</a>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>




        <!--main-contentbox-->
    </div>

@endsection
