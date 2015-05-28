@extends('app.master')

@section('content')

    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">

                    <span class="caption-subject font-green-sharp bold uppercase">Create New School</span>
                </div>

            </div>
            <div class="portlet-body form">
                {!! Form::open() !!}

                <div class="form-group">

                    {!! Form::label('school_name', 'Name of School') !!}
                    {!! Form::text('school_name',null,['class'=>'form-control']) !!}

                </div>
                
                <!-- Form Input -->
                <div class="form-group">
                            
                    {!! Form::label('principal_name', 'Principal Name') !!}
                    {!! Form::text('principal_name',null,['class'=>'form-control']) !!}
                            
                </div>
                


                <!-- Form Input -->
                <div class="form-group">

                   {!! Form::label('email', 'School Email') !!}
                   {!! Form::text('email',null,['class'=>'form-control']) !!}

                </div>

                <!-- Form Input -->
                <div class="form-group">

                   {!! Form::label('address', 'School Address') !!}
                   {!! Form::textarea('address',null,['class'=>'form-control']) !!}

                </div>

                <!-- Form Input -->
                <div class="form-group">

                   {!! Form::label('contact_person', 'Contact Person / In charge') !!}
                   {!! Form::text('contact_person',null,['class'=>'form-control']) !!}

                </div>

                <!-- Form Input -->
                <div class="form-group">

                   {!! Form::label('contact_number', 'Contact Number') !!}
                   {!! Form::text('contact_number',null,['class'=>'form-control']) !!}

                </div>

                <!-- Form Input -->
                <div class="form-group">

                   {!! Form::label('details', 'Any Other Details') !!}
                   {!! Form::textarea('details',null,['class'=>'form-control']) !!}

                </div>

                <!-- Form submit -->
                <div class="form-group">


                    {!! Form::submit('Save',['class'=>'btn blue form-control']) !!}

                </div>


                {!! Form::close() !!}

            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>




@stop