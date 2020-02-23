@extends('frontend.layouts.services')
@section('service')
<div class="services-details-content">
    <h3 class="title">@lang('general.services.feasibility_study')</h3>
    <p>@lang('general.feasibility_study_service.paragraph1')</p>
    <br>
    <p> @lang('general.feasibility_study_service.paragraph2')</p>
    <br>

    <p>@lang('general.feasibility_study_service.paragraph3')</p>
    <div class="services-details-features">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <ul>
                    <li><i class="fa fa-check"></i> @lang('general.feasibility_study_service.list1')</li>
                    <li><i class="fa fa-check"></i> @lang('general.feasibility_study_service.list2')</li>
                    <li><i class="fa fa-check"></i> @lang('general.feasibility_study_service.list3')</li>
                </ul>
            </div>


        </div>
    </div>

    <!--    <div class="our-mission">
                            <h3 class="title">Our Bookkeeping and Accounting services include the following:</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div> 
                    -->


</div>

@endsection
