@extends('layouts.app')

@section('h1')
    @if(!empty($item)) Edit of ---TODO @else Create @endif
@endsection

@section('content')
    <div class="container">

        <product-form

        :bezelmaterial="{{json_encode($bezelmaterial)}}"
        :brand="{{json_encode($brand)}}"
        :clasp="{{json_encode($clasp)}}"
        :claspmaterial="{{json_encode($claspmaterial)}}"
        :deliveryset="{{json_encode($deliveryset)}}"
        :deliverytime="{{json_encode($deliverytime)}}"
        :face="{{json_encode($face)}}"
        :gender="{{json_encode($gender)}}"
        :glass="{{json_encode($glass)}}"
        :numbersface="{{json_encode($numbersface)}}"
        :strapcolor="{{json_encode($strapcolor)}}"
        :strapmaterial="{{json_encode($strapmaterial)}}"
        :type="{{json_encode($type)}}"
        :waterresistant="{{json_encode($waterresistant)}}"

        :functions="{{json_encode($functions)}}"
        :others="{{json_encode($others)}}"
        :material="{{json_encode($material)}}"
        :condition="{{json_encode($condition)}}"
        :state="{{json_encode($state)}}"
        :item="{{$item ?? json_encode((object)array())}}">

        </product-form>
    </div>
@endsection
