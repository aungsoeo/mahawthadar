@extends('admin.layout')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')

<div id="content" class="bodylayout"><!-- second common-->
	<div class="well">
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> Teacher Create</h1>
			</div>	
		</div>
		<div class="row">
			<form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('admin.teacher.store') }}">
                {!! csrf_field() !!}
				<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Subject</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('main_category_id') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Main Category</label>

                    <div class="col-md-9">
                        <select id="ctr_parent_id" class="form-control" name="main_category_id">
                            <option value=""></option>
                            @foreach($cat as $c)
                                <option value="{{ $c->id }}">{{ $c->title }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('main_category_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('main_category_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('sub_category_id') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Sub Category</label>

                    <div class="col-md-9">
                        <select id="ctr_sub_id" class="form-control" name="sub_category_id">
                            <option value=""></option>
                     
                            @foreach($subcat as $sc)
                                <option value="{{ $sc->id }}">{{ $sc->title }}</option>
                            @endforeach
                         
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Teacher</label>

                    <div class="col-md-9">
                        <input type="text" name="custom_field1" class="form-control" value="{{ old('custom_field1') }}"> 
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-6">
                        <br>
                        <button type="submit" class="btn btn-primary">
                            Add
                        </button>
                    </div>
                </div>
            </form>
		</div>
		
	</div>
    <input type="hidden" id="ctr_tocken" value="{{ csrf_token() }}" /> 
</div>

@endsection

@section('scripts')
@parent

<script type="text/javascript" src="{{ asset('js/getsubfrommain.js') }}"></script>

@endsection