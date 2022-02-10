{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')
{{-- page title --}}
@section('title', $team->id ? __('admin.team-update') : 'admin.team-create')

@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2-materialize.css')}}">
@endsection
{{-- page style --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/form-select2.css')}}">
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m12 12">
            <div id="basic-form" class="card card card-default scrollspy">
                <div class="card-content">
                    <input name="old-images[]" id="old_images" hidden disabled value="{{$team->files}}">
                    <h4 class="card-title">{{$team->id ? __('admin.team-update') : __('admin.team-create')}}</h4>
                    {!! Form::model($team,['url' => $url, 'method' => $method,'files' => true]) !!}
                    <div class="row">
                        <div class="col s12 m6 8">
                            <div class="row">
                                <ul class="tabs">
                                    @foreach(config('translatable.locales') as $locale)
                                        <li class="tab col ">
                                            <a href="#lang-{{$locale}}">{{$locale}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                @foreach(config('translatable.locales') as $locale)
                                    <div id="lang-{{$locale}}" class="col s12  mt-5">
                                        <div class="input-field ">
                                            {!! Form::text($locale.'[name]',$team->translate($locale)->name ?? '',['class' => 'validate '. $errors->has($locale.'.name') ? '' : 'valid']) !!}
                                            {!! Form::label($locale.'[name]',__('admin.name')) !!}
                                            @error($locale.'.name')
                                            <small class="errorTxt4">
                                                <div class="error">
                                                    {{$message}}
                                                </div>
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="input-field ">
                                            {!! Form::text($locale.'[position]',$team->translate($locale)->position ?? '',['class' => 'validate '. $errors->has($locale.'.position') ? '' : 'valid']) !!}
                                            {!! Form::label($locale.'[position]',__('admin.position')) !!}
                                            @error($locale.'.position')
                                            <small class="errorTxt4">
                                                <div class="error">
                                                    {{$message}}
                                                </div>
                                            </small>
                                            @enderror
                                        </div>

                                        <div class="input-field ">
                                            {!! Form::text($locale.'[content]',$team->translate($locale)->content ?? '',['class' => 'validate '. $errors->has($locale.'.content') ? '' : 'valid']) !!}
                                            {!! Form::label($locale.'[content]',__('admin.content')) !!}
                                            @error($locale.'.content')
                                            <small class="errorTxt4">
                                                <div class="error">
                                                    {{$message}}
                                                </div>
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="input-field ">
                                            {!! Form::text($locale.'[childhood]',$team->translate($locale)->childhood ?? '',['class' => 'validate '. $errors->has($locale.'.childhood') ? '' : 'valid']) !!}
                                            {!! Form::label($locale.'[childhood]',__('admin.childhood')) !!}
                                            @error($locale.'.childhood')
                                            <small class="errorTxt4">
                                                <div class="error">
                                                    {{$message}}
                                                </div>
                                            </small>
                                            @enderror
                                        </div>

                                        <div class="input-field ">
                                            {!! Form::text($locale.'[hobby]',$team->translate($locale)->hobby ?? '',['class' => 'validate '. $errors->has($locale.'.hobby') ? '' : 'valid']) !!}
                                            {!! Form::label($locale.'[hobby]',__('admin.hobby')) !!}
                                            @error($locale.'.hobby')
                                            <small class="errorTxt4">
                                                <div class="error">
                                                    {{$message}}
                                                </div>
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="input-field ">
                                            {!! Form::text($locale.'[super_power]',$team->translate($locale)->super_power ?? '',['class' => 'validate '. $errors->has($locale.'.super_power') ? '' : 'valid']) !!}
                                            {!! Form::label($locale.'[super_power]',__('admin.super_power')) !!}
                                            @error($locale.'.super_power')
                                            <small class="errorTxt4">
                                                <div class="error">
                                                    {{$message}}
                                                </div>
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="input-field ">
                                            {!! Form::text($locale.'[favorite]',$team->translate($locale)->favorite ?? '',['class' => 'validate '. $errors->has($locale.'.favorite') ? '' : 'valid']) !!}
                                            {!! Form::label($locale.'[favorite]',__('admin.favorite')) !!}
                                            @error($locale.'.favorite')
                                            <small class="errorTxt4">
                                                <div class="error">
                                                    {{$message}}
                                                </div>
                                            </small>
                                            @enderror
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col s12 m6 8">
                            <div class="row">
                                <div class="input-field col s12">

                                    <select name="profession_id" class="select2 js-example-programmatic browser-default">
                                        <optgroup>
                                            @foreach($professions as $key => $profession)
                                                <option
                                                    value="{{$profession->id}}" {{$key === 0 ? 'selected' : ''}} {{$team->profession_id === $profession->id ? 'selected' : ''}}>
                                                    {{$profession->title}}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    </select>

                                    <label class="active" for="profession_id">{{__('admin.profession')}}</label>

                                    @error('profession_id')
                                    <small class="errorTxt4">
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    </small>
                                    @enderror
                                </div>

                                <div class="input-field"></div>
                                <div class="col s12 mt-3 mb-3">
                                    <label>
                                        <input type="checkbox" name="status"
                                               value="true" {{$team->status ? 'checked' : ''}}>
                                        <span>{{__('admin.status')}}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-images"></div>
                                @if ($errors->has('images'))
                                    <span class="help-block">
                                            {{ $errors->first('images') }}
                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">

                            {!! Form::submit($team->created_at ? __('admin.update') : __('admin.create'),['class' => 'btn cyan waves-effect waves-light ']) !!}
                        </div>

                    </div>
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>

@endsection

{{-- vendor script --}}
@section('vendor-script')
    <script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
    <script src="{{asset('js/scripts/form-select2.js')}}"></script>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        @foreach(config('translatable.locales') as $locale)
        CKEDITOR.replace('content-{{$locale}}', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token(),'type'=>'team'])}}",
            filebrowserUploadMethod: 'form'
        });
        @endforeach
    </script>
@endsection
