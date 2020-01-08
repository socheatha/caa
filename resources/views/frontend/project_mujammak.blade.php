@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <section id="block-front-latest-news" class="block-content">
                    <!-- block introduction -->
                        <h2 class="mt-5 mb-3">PROJECT MUJAMMAK</h2>
                        <p class="mb-4 mt-4">
                            <i class="text-danger">
                                Can’t afford $50 per month to sponsor a child, then please consider “Project 365” many small donations of say $10 per month can add up to provide a Scholarship for a student.
                            </i>
                        </p>
                        <h4 class="mb-2 mt-2">What is ProjectMujammak?</h4>
                        <p>“Project 365” was created by Breanna Mann and Kevin Donnelly from Australia, merged in 2013 and now one of the CHOICE Cambodia projects. Breanna is still coordinating the project together with CHOICE. The project is dedicated to supporting the urgent need for education of young underprivileged boys and girls from rural communities in Cambodia, 365 days of the year. Those that really want to continue their studies but cannot afford the costs themselves. We arrange for sponsors to provide Scholarships and Apprenticeships as we can, to those that meet the criteria. We provide accommodation in Phnom Penh under management and pay for students fees, food, education material, bedding, bicycles etc.</p>
                        <h4 class="mb-2 mt-2">Mission</h4>
                        <p>We strive to make a difference to the futures of disadvantaged Cambodian youth through sponsorship of university courses and/or skills based training programs.</p>
                        <h4 class="mb-2 mt-2">Vision</h4>
                        <p>Our Vision is equal opportunity and an increase in the standard of living for the disadvantaged people of Cambodia.</p>
                        <h4 class="mb-2 mt-2">Career Development</h4>
                        <p>Our Vision is equal opportunity and an increase in the standard of living for the disadvantaged people of Cambodia.</p>
                </section>
            </div>
            <div class="col-sm-4">
                @include('include.side_bar_right');
            </div>
        </div>
    </div>
@endsection
