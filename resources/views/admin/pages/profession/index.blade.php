{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')

{{-- page title --}}
@section('title',__('admin.profession'))


@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            <div id="button-trigger" class="card card card-default scrollspy">

                <div class="card-content">
                    <a class="btn-floating btn-large primary-text gradient-shadow compose-email-trigger "
                       href="{{locale_route('profession.create')}}">
                        <i class="material-icons">add</i>
                    </a>
                    <h4 class="card-title mt-2">@lang('admin.profession')</h4>
                    <div class="row">
                        <div class="col s12">
                            <form class="mr-0 p-0">
                                <table id="data-table-simple" class="display">
                                    <thead>
                                    <tr>
                                        <th>@lang('admin.id')</th>
                                        <th>@lang('admin.status')</th>
                                        <th>@lang('admin.title')</th>
                                        <th>@lang('admin.actions')</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <th>
                                            <input type="number" name="id" onchange="this.form.submit()"
                                                   value="{{Request::get('id')}}"
                                                   class="validate {{$errors->has('id') ? '' : 'valid'}}">
                                        </th>
                                        <th>
                                            <select class="form-control" name="status" onchange="this.form.submit()">
                                                <option
                                                    value="" {{Request::get('status') === '' ? 'selected' :''}}>@lang('admin.any')</option>
                                                <option
                                                    value="1" {{Request::get('status') === '1' ? 'selected' :''}}>@lang('admin.active')</option>
                                                <option
                                                    value="0" {{Request::get('status') === '0' ? 'selected' :''}}>@lang('admin.not_active')</option>
                                            </select>
                                        </th>
                                        <th>
                                            <input type="text" name="title" onchange="this.form.submit()"
                                                   value="{{Request::get('title')}}"
                                                   class="validate {{$errors->has('title') ? '' : 'valid'}}">
                                        </th>
                                        </th>
                                    </tr>
                                    <tbody>
                                    @if($professions)
                                        @foreach($professions as $profession)
                                            <tr>
                                                <td>{{$profession->id}}</td>
                                                <td>
                                                    @if($profession->status)
                                                        <span class="green-text">@lang('admin.active')</span>
                                                    @else
                                                        <span class="red-text">@lang('admin.not_active')</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <ul class="tabs">
                                                                @foreach(config('translatable.locales') as $locale)
                                                                    <li class="tab ">
                                                                        <a href="#cat-{{$locale}}-{{$profession->id}}">
                                                                            {{$locale}}
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col sm12 mt-2">
                                                            @foreach(config('translatable.locales') as $locale)
                                                                <div id="cat-{{$locale}}-{{$profession->id}}"
                                                                     class="">
                                                                    {{$profession->translate($locale)->title ?? ''}}
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{locale_route('profession.show',$profession->id)}}">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                    <a href="{{locale_route('profession.edit',$profession->id)}}"
                                                       class="pl-3">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a href="{{locale_route('profession.destroy',$profession->id)}}"
                                                       onclick="return confirm('Are you sure?')" class="pl-3">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </form>
                            {{ $professions->appends(request()->input())->links('admin.vendor.pagination.material') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


