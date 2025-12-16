<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        @yield('meta')
        @yield('title')
        @yield('description')
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/png">
        <link rel="stylesheet" href="{!! asset('assets/css/slick.css') !!}">
        <link rel="stylesheet" href="{!! asset('assets/css/lineicons.css') !!}">
        <link rel="stylesheet" href="{!! asset('assets/css/font-awesome.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('assets/css/animate.css') !!}">
        <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('assets/css/default.css') !!}">
        <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
        @yield('css')
        <style>
          .custom-navbar {
              background-image: url('{{ asset("assets/images/navbar-bg.jpg") }}');
              background-size: cover;          
              background-position: center;     
              background-repeat: no-repeat;
          }
          .custom-navbar::before {
              content: "";
              position: absolute;
              top: 0; left: 0;
              width: 100%; height: 100%;
              z-index: 1;
          }
          .why-bg {
              background-image: url('{{ asset("assets/images/why.jpg") }}');
              background-size: cover;          
              background-position: center;     
              background-repeat: no-repeat;
          }
          .services-bg {
              background-image: url('{{ asset("assets/images/services.jpg") }}');
              background-size: cover;          
              background-position: center;     
              background-repeat: no-repeat;
          }
          .virtual-bg {
              background-image: url('{{ asset("assets/images/va.jpg") }}');
              background-size: cover;          
              background-position: center;     
              background-repeat: no-repeat;
          }
          
          .automation-bg {
              background-image: url('{{ asset("assets/images/at.jpg") }}');
              background-size: cover;          
              background-position: center;     
              background-repeat: no-repeat;
          }
          .crm-bg {
              background-image: url('{{ asset("assets/images/crm.jpg") }}');
              background-size: cover;          
              background-position: center;     
              background-repeat: no-repeat;
          }
          .website-bg {
              background-image: url('{{ asset("assets/images/website.jpg") }}');
              background-size: cover;          
              background-position: center;     
              background-repeat: no-repeat;
          }
          .office-bg {
              background-image: url('{{ asset("assets/images/office.jpg") }}');
              background-size: cover;          
              background-position: center;     
              background-repeat: no-repeat;
          }
          .digital-bg {
              background-image: url('{{ asset("assets/images/digital.jpg") }}');
              background-size: cover;          
              background-position: center;     
              background-repeat: no-repeat;
          }
          .footer-bg {
              background-image: url('{{ asset("assets/images/footer.jpg") }}');
              background-size: cover;          
              background-position: center;     
              background-repeat: no-repeat;
          }
          .video-section {
              position: relative;
              height: 90vh;
              width: 100%;
              overflow: hidden;
          }

          .video-bg {
              position: absolute;
              top: 50%;
              left: 50%;
              min-width: 100%;
              min-height: 100%;
              width: auto;
              height: auto;
              transform: translate(-50%, -50%);
              object-fit: cover;
              z-index: 0;
          }

          .video-overlay {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background: rgba(0, 0, 0, 55%); /* black overlay */
              z-index: 1;
          }

          .video-content {
              position: relative;
              z-index: 2;
              color: #fff;
              top: 50%;
              transform: translateY(-50%);
          }
        </style>
    </head>
    <body>
        <div class="preloader">
            <div class="loader">
                <div class="ytp-spinner">
                    <div class="ytp-spinner-container">
                        <div class="ytp-spinner-rotator">
                            <div class="ytp-spinner-left">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                            <div class="ytp-spinner-right">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('website.layout.partials.header')

        @yield('content')

        @include('website.layout.partials.footer')
        @include('website.schedule-meeting.modal')
        <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
        
        <script src="{!! asset('assets/js/vendor/jquery-1.12.4.min.js') !!}"></script>
        <script src="{!! asset('assets/js/vendor/modernizr-3.7.1.min.js') !!}"></script>
        <script src="{!! asset('assets/js/popper.min.js') !!}"></script>
        <script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
        <script src="{!! asset('assets/js/slick.min.js') !!}"></script>
        <script src="{!! asset('assets/js/ajax-contact.js') !!}"></script>
        <script src="{!! asset('assets/js/jquery.appear.min.js') !!}"></script>
        <script src="{!! asset('assets/js/jquery.easing.min.js') !!}"></script>
        <script src="{!! asset('assets/js/scrolling-nav.js') !!}"></script>
        <script src="{!! asset('assets/js/wow.min.js') !!}"></script>
        <script src="{!! asset('assets/js/main.js') !!}"></script>
        @yield('js')
        <script>
    $(function(){
      var $steps = $('.step');
      var current = 0; // zero based
      var total = $steps.length;
      function showStep(i){
        current = i;
        $steps.removeClass('active').eq(i).addClass('active');
        $('.step-label').css('color','var(--muted)').filter(function(){return $(this).data('step')-1 <= i}).css('color','#111');
        $('#prevBtn').toggle(i>0);
          if(i === total-1){
            $('#nextBtn').hide();
            $('#submitBtn').show();
          } else {
            $('#nextBtn').show();
            $('#submitBtn').hide();
          }
      }

      function validateStep(i){
        var valid = true;
        return valid;
        $steps.eq(i).find('[required]').each(function(){
          if(!$(this).val()){
            $(this).css('outline','2px solid rgba(220,38,38,0.12)');
            valid = false;
          } else {
            $(this).css('outline','none');
          }
        });
        return valid;
      }

      $('#nextBtn').on('click',function(){
        if(!validateStep(current)){
          alert('Please fill required fields on this step.');
          return;
        }
        if(current < total-1) showStep(current+1);
      });

      $('#prevBtn').on('click',function(){
        if(current>0) showStep(current-1);
      });

      $('#fileUpload').on('change',function(){
        var f = this.files[0];
        if(!f){ $('#filePreview').text('No file selected'); return; }
        $('#filePreview').text(f.name + ' — ' + Math.round(f.size/1024) + ' KB');
      });

      function collectData(){
        var data = {};
        $('#vaForm').serializeArray().forEach(function(x){ data[x.name]=x.value });
        // add filename if any
        var f = $('#fileUpload')[0].files[0];
        data._filename = f ? f.name : 'No file';
        return data;
      }

      function renderSummary(){
        var d = collectData();
        var $s = $('#summary').empty();
        var map = [
          ['Full Name','fullName'],['Company','company'],['Country','country'],['Email','email'],['Phone','phone'],['Website','website'],
          ['VA Type','vaType'],['Working Hours','workingHours'],['Skills','skills'],
          ['Need Dev Team','devTeam'],['CRM Required','crmReq'],['Tech Stack','techStack'],
          ['Nature of Business','nature'],['Target Market','targetMarket'],['Workload','workload'],['Start Date','startDate'],
          ['Budget','budget'],['Duration','duration'],['Communication','commMethod'],['Notes','notes'],['Attachment','_filename']
        ];
        map.forEach(function(k){
          var v = d[k[1]] || '-';
          var $it = $('<div class="item" />');
          $it.html('<strong>'+k[0]+':</strong> <div class="small">'+escapeHtml(v)+'</div>');
          $s.append($it);
        });
      }

      function escapeHtml(str){
        if(!str) return '';
        return String(str).replace(/[&<>\"']/g, function(s){return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;','\'':'&#39;'}[s]});
      }

      $('#generateSummary').on('click',function(){
        renderSummary();
        $('#summaryWrap').show();
        // move to summary area
        $('html,body').animate({scrollTop:$('#summaryWrap').offset().top-20},300);
      });

      $('#submitBtn').on('click',function(){
        if(!validateStep(current)){
          alert('Please fill required fields.');
          return;
        }
        // final collect
        renderSummary();
        var d = collectData();
        // create mailto body
        var body = 'Virtual Assistant Request%0D%0A%0D%0A';
        Object.keys(d).forEach(function(k){ body += encodeURIComponent(k+': '+(d[k]||'-')) + '%0D%0A'; });
        var subject = encodeURIComponent('New VA Request from '+(d.fullName||'Unknown'));
        // try to open user's email client (this is graceful fallback)
        var mail = 'mailto:'+encodeURIComponent(d.email||'')+'?subject='+subject+'&body='+body;
        window.location.href = mail;
        // show confirmation UI
        alert('A draft email will open in your email client containing the summary. If nothing opened, copy the summary shown on the page and paste into your email.');
        // optionally: here you would send to server via AJAX
      });

      // step labels clickable to jump (optional)
      $('.step-label').on('click', function(){
        var idx = $(this).data('step')-1;
        if(idx <= current+1) showStep(idx); // allow going back or one forward only
      });

      // initialize
      showStep(0);

      // accessibility: allow Enter to move on required fields
      $('#vaForm input, #vaForm select, #vaForm textarea').on('keydown', function(e){
        if(e.key === 'Enter'){
          e.preventDefault();
          $('#nextBtn').click();
        }
      });

    });
  </script>
    </body>
</html>
