@extends('app.master')

@section('content')
    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">

                    <span class="caption-subject font-green-sharp bold uppercase">Schools</span>


                </div>

                <a href="{{url('schools/create')}}" class="btn blue pull-right">Add New</a>

            </div>
            <div class="portlet-body form">

                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Principal
                        </th>
                        <th>
                            In charge
                        </th>
                        <th>
                            Contact No.
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($data['schools'] as $school)



                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                {{ $school->school_name }}
                            </td>
                            <td>
                                {{ $school->principal_name }}
                            </td>
                            <td>
                                {{ $school->contact_person }}
                            </td>
                            <td>
                                {{ $school->contact_number }}
                            </td>
                        </tr>



                    @endforeach

                    </tbody>
                </table>



            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        <!-- BEGIN SAMPLE FORM PORTLET-->
    </div>




@stop