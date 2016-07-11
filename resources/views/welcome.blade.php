<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="assets/css/bootstrap-datetimepicker.css" rel="stylesheet">

        <script src="assets/js/jquery2.1.0.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <style>
            .panel_body {
                display : none;
            }
        </style>
    </head>
    <body>
        <div id="app">
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

                    <a name="a_medications"></a>
                    <div id="medications" class="panel panel-default">
                        <greeter heading="Medications"></greeter>
                        <div class="panel_body">
                            <div class="p-l-xs"><br>
                                <select>
                                        <option value="1">medications name</option>
                                </select>
                                <br>&nbsp;<br>
                                <div class="button p-l-md p-b-xs">
                                    <button type="button" class="btn btn-primary">Update</button>
                                </div>
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

                </div>
        </div>
   </body>
</html>

<script src="/js/main.js"></script>
