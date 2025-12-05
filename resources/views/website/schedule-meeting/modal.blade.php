<div class="modal fade" id="ScheduleMeeting" tabindex="-1" role="dialog" aria-labelledby="ScheduleMeetingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="wizard testimonial_area" role="form" aria-labelledby="wizardTitle">
                    <div class="steps" aria-hidden="true">
                        <div class="step-label" data-step="1">1. Personal  &amp; Business</div>
                        <div class="step-label" data-step="2">2. Service</div>
                        <div class="step-label" data-step="3">3. Technical</div>
                        <div class="step-label" data-step="4">4. Business</div>
                        <div class="step-label" data-step="5">5. Budget</div>
                        <div class="step-label" data-step="6">6. Final</div>
                    </div>
                    <div class="content">
                        <form id="vaForm">
                            @include('website.schedule-meeting.steps.step-1')
                            @include('website.schedule-meeting.steps.step-2')
                            @include('website.schedule-meeting.steps.step-3')
                            @include('website.schedule-meeting.steps.step-4')
                            @include('website.schedule-meeting.steps.step-5')
                            @include('website.schedule-meeting.steps.step-6')
                        <form>
                    </div>
                    <div class="controls">
                        <div>
                            <button type="button" class="main-btn" id="prevBtn" style="display:none">&larr; Back</button>
                        </div>
                        <div>
                            <button type="button" class="main-btn" id="nextBtn">Next &rarr;</button>
                            <button class="main-btn" id="submitBtn" style="display:none">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>