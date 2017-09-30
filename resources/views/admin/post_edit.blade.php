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
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> Post Create</h1>
			</div>	
		</div>
		<div class="row">
			<form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('admin.post.update',$posts->id) }}">
                {!! csrf_field() !!}
				<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Post Title</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" name="title" value="{{ $posts->title }}">

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
                        <select class="form-control" name="main_category_id">
                            <option value="{{$posts->main_category_id}}">{{$posts->main_category_id}}</option>
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
                        <select class="form-control" name="sub_category_id">
                            <option value="0"></option>
                            @foreach($subcat as $sc)
                                <option value="{{ $sc->id }}">{{ $sc->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('feature_photo') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Feature Photo</label>

                    <div class="col-md-9">
                        <input type="file" class="form-control" name="feature_photo">@if ($errors->has('feature_photo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('feature_photo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('short_description') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Short Description</label>

                    <div class="col-md-9">
                        <textarea class="form-control" name="short_description">{{ $posts->short_description }}</textarea>

                        @if ($errors->has('short_description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('short_description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('detail_photo') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Detail Photo</label>

                    <div class="col-md-9">
                        <input type="file" class="form-control" name="detail_photo">@if ($errors->has('detail_photo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('detail_photo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('detail_description') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Detail Description</label>

                    <div class="col-md-9">
                        <textarea class="form-control" style="height:300px" name="detail_description">{{ $posts->detail_description}}</textarea>

                        @if ($errors->has('detail_description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('detail_description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Custom Field</label>

                    <div class="col-md-9">
                        <textarea class="form-control" name="custom_field1">{{ old('custom_field1') }}</textarea>

                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label">Custom Field</label>

                    <div class="col-md-9">
                        <textarea class="form-control" name="custom_field2">{{ old('custom_field2') }}</textarea>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Custom Field</label>

                    <div class="col-md-9">
                        <textarea class="form-control" name="custom_field3">{{ old('custom_field3') }}</textarea>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Custom Field</label>

                    <div class="col-md-9">
                        <textarea class="form-control" name="custom_field4">{{ old('custom_field4') }}</textarea>

                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label">Custom Field</label>

                    <div class="col-md-9">
                        <textarea class="form-control" name="custom_field5">{{ old('custom_field5') }}</textarea>

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
</div>

@endsection

@section('scripts')
@parent
<!-- your custom script here -->
@endsection