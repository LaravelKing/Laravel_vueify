@extends('spark::layouts.app')

@section('content')
    <style>
        .panel_body {
            display : none;
        }
    </style>
    <div id="app" class="container">
        <div class="m-b-xs">
            In order to provide sponsors of studies and clinical trials with the information they need 
            to find your profile and select you as a participant for which you may receive compensation,
            Seqster needs some basic information about your medical history.  Seqster stores this information
            with strong encryption in a database hosted on HIPAA-compliant dedicated storage that is subject
            to FDA audits and has been certified by (tbd) (ClearWater Compliance for example).

            To read more about our privacy policy, click <a href="privacy.html" target="_new">here</a>.
            <hr>
        </div>

        <!-- Application Dashboard -->
        <div class="row">

        <div class="col-xs-2">Sections
            <ul>
                <li><a href="#a_personal">Personal Info</a></li>
                <li><a href="#a_allergies">Allergies</a></li>
                <li><a href="#a_conditions">Conditions</a></li>
                <li><a href="#a_medications">Medications</a></li>
                <li><a href="#a_herbals">Herbals</a></li>
            </ul>
        </div>

        <div class="col-md-8 col-md-offset-1"><!-- forms column -->

            <a name="a_personal"></a>
            <div id="personal" class="panel panel-default">
                <greeter heading="Personal Info"></greeter>
                <div class="panel_body">
                    <div class="panel panel-default p-l-xs" style="margin:10px 10px 10px 10px;">
                        <greeter heading="Height &amp; Weight"></greeter>
                        <div class="panel_body">
                            <div class="m-t-sm">
                                <label for="mh_height_feet">Height:
                                    <input type="text" id="mh_height_feet" style="width:30px"> feet
                                </label>
                                <input type="text" id="mh_height_inches" style="width:30px"> inches
                            </div>

                            <div>
                                <label for="mh_weight">Weight:
                                    <input type="text" id="mh_weight" style="width:60px"> in lbs.
                                </label>
                            </div>

                            <div>
                                Based on your height and weight, your computed Body Mass Index (BMI) is:<br>
                                <label for="bmi">BMI:
                                    <span id="bmi" class="form-control-static">123</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default p-l-xs" style="margin:10px 10px 10px 10px;">
                        <greeter heading="Race (choose one or more)"></greeter>
                        <div class="panel_body">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="race" value="0">
                                    American Indian or Alaska Native
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="race" value="1">
                                    Asian
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="race" value="2">
                                    Black or African American
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="race" value="3">
                                    Hispanic or Latino
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="race" value="4">
                                    Native Hawaiian or Other Pacific Islander
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="race" value="5">
                                    White or Caucasian
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="button p-b-xs p-l-md">
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>

            <a name="a_allergies"></a>
            <div id="allergies" class="panel panel-default">
                <greeter heading="Allergies"></greeter>
                <div class="panel_body">
                    @foreach ($allergen_sections as $section)
                        <div class="panel panel-default p-l-xs" style="margin:10px 10px 10px 10px;">
                            <greeter heading="{{ $section }}"></greeter>
                            <div class="panel_body">
                                @foreach ($allergens as $allergen)
                                    @if ($allergen['category'] == $section)
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="ck_allergy_{{$allergen['id']}}">
                                                {{ $allergen['name'] }}
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    <div class="button p-l-md p-b-xs">
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>

            <a name="a_conditions"></a>
            <div id="conditions" class="panel panel-default p-l-xs">
                <greeter heading="Conditions"></greeter>
                <div class="panel_body">
                    <autocomp url="/conditions" subject="Conditions" placeholder="Enter a few letters of the condition"></autocomp>
                    <div class="button p-l-md p-b-xs">
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>

            <a name="a_medications"></a>
            <div id="medications" class="panel panel-default">
                <greeter heading="Medications"></greeter>
                <div class="panel_body">
                    <div class="p-l-xs"><br>
                        <select>
                            @foreach ($medications as $medication)
                                <option value="{{$medication['id']}}">{{ $medication['name'] }}</option>
                            @endforeach
                        </select>
                        <br>&nbsp;<br>
                        <div class="button p-l-md p-b-xs">
                            <button type="button" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>

            <a name="a_herbals"></a>
            <div id="herbals" class="panel panel-default p-l-xs">
                <greeter heading="Herbals"></greeter>
                <div class="panel_body">
                    @foreach ($herbals as $herb)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="ck_herb{{$herb['id']}}">
                                {{ $herb['name'] }}
                            </label>
                        </div>
                    @endforeach
                    <div class="button p-l-md p-b-xs">
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>

            <div id="save" class="panel panel-default">
                <div class="panel-body">
                    <history :user="user" inline-template>
                        <validator name="validator">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/history') }}" v-on:submit.prevent="onSubmit" novalidate>
                                {!! csrf_field() !!}

                                <!-- Text Form Input -->
                                <div class="hidden form-group{{ $errors->has('text') ? ' has-error' : '' }}" :class="{ 'has-error': $validator.text.required && ! formValid }">
                                    <label class="col-md-4 control-label">Text</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="text" value="{{ old('text') }}" v-validate:text="['required']">

                                        @include('errors.field', ['fieldName' => 'text'])
                                        <strong class="help-block" v-show="$validator.text.required && ! formValid">Text Field is required!</strong>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="button" class="btn btn-primary">Save All Sections</button>
                                    </div>
                                </div>
                            </form>
                        </validator>
                    </history>
                </div>
            </div>
        </div><!-- end forms column -->
    </div><!-- end row -->
    </div> <!-- end container -->
@endsection
