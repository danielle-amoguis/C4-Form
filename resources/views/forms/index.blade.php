@extends('style')

@section('content')
{!! Form::open(['url' => route('forms.store'), 'method' => 'POST']) !!}
{{-- <form action="{{ route('forms.send') }}"> --}}
    <div class="C4 body">
        <div class="header">
        <h1 id="checkbox">Please check if applicable:</h1>
        </div>
            <div class="wrapper">

                <div class="box">
            
                <div class="questions">
                {{-- question form --}}
                <b>34. Are you related by consanguinity or affinity to the appointing or recommending authority, or to chief of bureu or office or to the person who has made immediate supervision over you in the Office, 
                    Bureau or Department where you will be appointed,</b><br>

                <b>{{Form::label('34-a-answer','a. within the third degree?')}}<br></b>
                {{Form::radio('34-a-answer', 'YES')}}
                {{Form::label('34-a-answer','YES')}}

                {{Form::radio('34-a-answer', 'NO')}}
                {{Form::label('34-a-answer','NO')}}<br>

                <b>{{Form::label('34-b-answer','b. within the fourth degree (for Local government Unit - Career Employees)?')}}<br></b>
                {{Form::radio('34-b-answer', 'YES')}}
                {{Form::label('34-b-answer','YES')}}

                {{Form::radio('34-b-answer', 'NO')}}
                {{Form::label('34-b-answer','NO')}}<br>
                
                {{Form::label('34-b-answer-details', "If YES, give details: ")}}
                {{Form::text('34-b-answer-details', null, array('class'=>'form-control', 'id' => '34-b-answer-details', 'disabled'))}}

                <b>{{Form::label('35-a-answer','35. a. Have you ever been found guilty of any administrative offense?')}}<br></b>
                {{Form::radio('35-a-answer', 'YES')}}
                {{Form::label('35-a-answer','YES')}}

                {{Form::radio('35-a-answer', 'NO')}}
                {{Form::label('35-a-answer','NO')}}<br>
                
                {{Form::label('35-a-answer-details', "If YES, give details: ")}}
                {{Form::text('35-a-answer-details',null, array('class'=>'form-control', 'id' => '35-a-answer-details', 'disabled'))}}

                <b>{{Form::label('35-b-answer','b. Have you been criminally change before any court?')}}<br></b>
                {{Form::radio('35-b-answer', 'YES')}}
                {{Form::label('35-b-answer','YES')}}

                {{Form::radio('35-b-answer', 'NO')}}
                {{Form::label('35-b-answer','NO')}}<br>

                {{Form::label('35-b-answer-details','If YES, give details: ')}}<br>
                {{Form::label('35-b-answer-date','Date Field: ')}}
                {{Form::date('35-b-answer-date', null, array('disabled'))}}<br>
                {{Form::label('35-b-answer-case', "Status of Case/s: ")}}
                {{Form::text('35-b-answer-case',null, array('class'=>'form-control', 'id' => '35-b-answer-case', 'disabled'))}}
            

                <b>{{Form::label('36-answer','36. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?')}}<br></b>
                {{Form::radio('36-answer', 'YES')}}
                {{Form::label('36-answer','YES')}}

                {{Form::radio('36-answer', 'NO')}}
                {{Form::label('36-answer','NO')}}<br>

                {{Form::label('36-answer-details', "If YES, give details: ")}}
                {{Form::text('36-answer-details',null, array('class'=>'form-control', 'id' => '36-answer-details', 'disabled'))}}

                <b>{{Form::label('37-answer','37. Have you ever been separated from the service in any of the following modes: 
                resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or 
                phased out (abolition) in the public or private sector?')}}<br></b>
                {{Form::radio('37-answer', 'YES')}}
                {{Form::label('37-answer','YES')}}

                {{Form::radio('37-answer', 'NO')}}
                {{Form::label('37-answer','NO')}}<br>

                {{Form::label('37-answer-details', "If YES, give details: ")}}
                {{Form::text('37-answer-details',null, array('class'=>'form-control', 'id' => '37-answer-details', 'disabled'))}}

                <b>{{Form::label('38-a-answer','38. a. Have you ever been a candidate in a national or local election held within the last year<br>
                (except Barangay election)?')}}<br></b>
                {{Form::radio('38-a-answer', 'YES')}}
                {{Form::label('38-a-answer','YES')}}

                {{Form::radio('38-a-answer', 'NO')}}
                {{Form::label('38-a-answer','NO')}}<br>

                {{Form::label('38-a-answer-details', "If YES, give details: ")}}
                {{Form::text('38-a-answer-details',null, array('class'=>'form-control', 'id' => '38-a-answer-details', 'disabled'))}}

                <b>{{Form::label('38-b-answer','b. Have you resigned from the government service during the three (3)-month period before<br>
                the last election to promote/actively campaign for a national or local candidate?')}}<br></b>
                {{Form::radio('38-b-answer', 'YES')}}
                {{Form::label('38-b-answer','YES')}}

                {{Form::radio('38-b-answer', 'NO')}}
                {{Form::label('38-b-answer','NO')}}<br>

                {{Form::label('38-b-answer-details', "If YES, give details: ")}}
                {{Form::text('38-b-answer-details',null, array('class'=>'form-control', 'id' => '38-b-answer-details', 'disabled'))}}

                <b>{{Form::label('39-answer','39. Have you acquired the status of an immigrant or permanent resident of another country?')}}<br></b>
                {{Form::radio('39-answer', 'YES')}}
                {{Form::label('39-answer','YES')}}

                {{Form::radio('39-answer', 'NO')}}
                {{Form::label('39-answer','NO')}}<br>

                {{Form::label('39-answer-details', "If YES, give details: ")}}
                {{Form::text('39-answer-details',null, array('class'=>'form-control', 'id' => '39-answer-details', 'disabled'))}}

                <b>40. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons 
                    (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items: </b><br>

                <b>{{Form::label('40-a-answer','a.   Are you a member of any indigenous group?')}}<br></b>
                {{Form::radio('40-a-answer', 'YES')}}
                {{Form::label('40-a-answer','YES')}}

                {{Form::radio('40-a-answer', 'NO')}}
                {{Form::label('40-a-answer','NO')}}<br>

                {{Form::label('40-a-answer-details', "If YES, please specify: ")}}
                {{Form::text('40-a-answer-details',null, array('class'=>'form-control', 'id' => '40-a-answer-details', 'disabled'))}}

                <b>{{Form::label('40-b-answer','b.   Are you a person with disability?')}}<br></b>
                {{Form::radio('40-b-answer', 'YES')}}
                {{Form::label('40-b-answer','YES')}}

                {{Form::radio('40-b-answer', 'NO')}}
                {{Form::label('40-b-answer','NO')}}<br>

                {{Form::label('40-b-answer-details', "If YES, please specify ID No: ")}}
                {{Form::number('40-b-answer-details',null, array('class'=>'form-control', 'id' => '40-b-answer-details', 'disabled'))}}

                <b>{{Form::label('40-c-answer','c.   Are you a solo parent?')}}<br></b>
                {{Form::radio('40-c-answer', 'YES')}}
                {{Form::label('40-c-answer','YES')}}

                {{Form::radio('40-c-answer', 'NO')}}
                {{Form::label('40-c-answer','NO')}}<br>
                
                {{Form::label('40-c-answer-details', "If YES, please specify ID No: ")}}
                {{Form::number('40-c-answer-details',null, array('class'=>'form-control', 'id' => '40-c-answer-details', 'disabled'))}}
                    
                <hr class="line1">
            

            <div class="references">

                <b>41. REFRENCES </b><br>
                <i>(Person not related by consangurity or affinity to applicant/appointee)</i><br>
                <b>{{Form::label('41-answer-name', "Name: ")}}</b>
                {{Form::text('41-answer-name',null, array('class'=>'form-control', 'id' => '41-answer-name','placeholder' => 'Full Name'))}}
                <b>{{Form::label('41-answer-address', "Address: ")}}</b>
                {{Form::text('41-answer-address',null, array('class'=>'form-control', 'id' => '41-answer-address','placeholder' => 'Address'))}}
                <b>{{Form::label('41-answer-contact-no', "Telephone Number: ")}}</b>
                {{Form::number('41-answer-contact-no',null, array('class'=>'form-control', 'id' => '41-answer-contact-no','placeholder' => 'Tel No'))}}

            </div>

            <div class="oath">
                <b><i>42. I declare under oath that I have personally accomplished this Personal Data Sheet which is a 'YES', correct and 
                    complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the 
                    Philippines. I authorize the agency head/authorized representative to verify/validate the contents stated herein. 
                    I  agree that any misrepresentation made in this document and its attachments shall cause the filin'g 
'                              of administrative/criminal case/s against me.</i></b>
            </div>
            
            <div class="id">

                <b>Government Issued ID </b><i>(i.e.Passport, GSIS, SSS, PRC, Driver's License, etc.)</i><br>
                <b>PLEASE INDICATE ID Number</b><br>
                <b>{{Form::label('42-answer-gov-id', "Government Issued ID: ")}}</b>
                {{Form::number('42-answer-gov-id',null, array('class'=>'form-control', 'id' => '42-answer-gov-id','placeholder' => 'ID'))}}
                <b>{{Form::label('42-answer-valid-id-no', "ID/License/Passport No.: ")}}</b>
                {{Form::number('42-answer-valid-id-no',null, array('class'=>'form-control', 'id' => '42-answer-valid-id-no','placeholder' => 'ID No.'))}}
                <b>{{Form::label('42-answer-issuance-details', "Date/Place of Issuance: ")}}</b>
                {{Form::text('42-answer-issuance-details',null, array('class'=>'form-control', 'id' => '42-answer-issuance-details','placeholder' => 'Issued on'))}}

                </div>

                    {{-- <hr class="line2"> --}}

                {{-- <div class="signature">

                    <b>Signature: </b><br>
                    {{Form::file('image')}}
                <b>{{Form::label('Adate','Date accomplished: ')}}</b>
                    {{Form::date('Adate')}}<br>

                </div>

                <div class="photo">

                    <b>ID Picture: </b><br>
                    <input type="file" accept="image/*" id="img-picker">
                        <img id="output"/>
                    
                    {{-- {{Form::file('image')}} --}}
{{-- 
                </div>

                <div class="thumbphoto">

                    <b>Thumbmark: </b><br>
                    {{Form::file('image')}}

                </div>

                <div classs="last">

                <b>{{Form::label('Sdate','Date subscribed and sworn: ')}}</b>
                    {{Form::date('Sdate')}}<br>

                    <b>Person Administrating Oath: </b>

                </div>     --}} 

                <button type="submit" class="btn btn-secondary">Submit</button>
                {!! Form::close() !!}
                <a href="{{ route('download-excel') }}" class="btn btn-secondary">Download All Records</a>
                

            </div>
        </div>
    </div>

{{-- </form> --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(function() {
        $('#img-picker').on('change', function (event) {
            var data = new FormData();
            data.append('chosen_img', event.target.files[0]);
            $.ajax({
                url: '/forms/upload',
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                processData: false,
                contentType: false, 
                cache: false
            })
            .done(function (res) {
                $('#output').attr('src', res.url);
            });
        });
    });
</script> --}}

<script>
$(function() {
    $('input[name="34-b-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="34-b-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="34-b-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="35-a-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="35-a-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="35-a-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="35-b-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="35-b-answer-date"]').attr({
                'disabled': false,
                'required': true
            })
            $('input[name="35-b-answer-case"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="35-b-answer-date"]').attr({
                'disabled': true,
                'required': false
            })
            $('input[name="35-b-answer-case"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="36-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="36-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="36-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="37-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="37-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="37-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="38-a-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="38-a-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="38-a-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="38-b-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="38-b-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="38-b-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="39-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="39-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="39-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="40-a-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="40-a-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="40-a-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="40-b-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="40-b-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="40-b-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="40-c-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="40-c-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="40-c-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
});
</script>

@endsection