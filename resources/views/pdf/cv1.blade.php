<!DOCTYPE html>
<html lang="en">
  <head>
    <title>inxgo Resume 1</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- FontAwesome JS-->
    <script src="{{ asset('resume/cv1/assets/fontawesome/js/all.min.js') }}" defer></script>
    <!-- Theme CSS -->
     <link href="{{ asset('resume/cv1/assets/css/style.css') }}" rel="stylesheet">
    <link id="theme-style" rel="stylesheet" href="">
  </head>
  <body>
    <div class="container">
      <div class="profile" style="background:#eedfda;">
        <!--  <div class="profile-photo"></div>-->
        <div class="profile-info" style="margin-top: 70px;">
          <h2 class="heading heading-light"> Profile </h2>
          <p class="profile-text">
              {{$data['objective']->career_object }}
          </p>
          <div class="contacts">
            <h2 class="heading heading-light"> EXPERTISE </h2>
            <ul style="font-size: 15px;font-family: roboto;">
              @foreach ($data['expert'] as $index)
                <li>{{ $index->name }}</li>
              @endforeach()
            </ul>
          </div>
          <h2 class="heading heading-light">SKILLS</h2>
          <div class="skills">
            <ul class="skills-list">
              @foreach ($data['skill'] as $index)
                <li class="skills-list__item"> {{ $index->name }} <div class="level level-{{ $index->percentage }}"></div>
                </li>
              @endforeach()
            </ul>
          </div>
          <h2 class="heading heading-light">REREFRENCES</h2>
          @foreach ($data['references'] as $index)
            <ul style="margin-top:15px;">
              <h3 class="list-item__title">{{ $index->name}}</h3>
              <span class="list-item__date">{{ $index->year}}-{{ $index->year_end}}</span>
              <li>
                <a href="tel:{{ $index->about}}" class="contacts-text">{{ $index->about}}</a>
              </li>
            </ul>
           @endforeach()
          {{-- <ul style="margin-top:25px;">
            <h3 class="list-item__title">Exquisite Technologies</h3>
            <span class="list-item__date">Jan 2016 - 0ct 2016</span>
            <li>
              <a href="tel:+18001234567" class="contacts-text">+92 304 4675774</a>
            </li>
          </ul>
          <ul style="margin-top:15px;">
            <h3 class="list-item__title">Exquisite Technologies</h3>
            <span class="list-item__date">Jan 2016 - 0ct 2016</span>
            <li>
              <a href="tel:+18001234567" class="contacts-text">+92 304 4675774</a>
            </li>
          </ul> --}}
        </div>
      </div>
      <div class="profile" style="background:#d99e8c;margin-top: 115px;border-top-left-radius: 150px;border-top-right-radius: 150px;">
        <!--<div class="profile-photo"></div>-->
        <div class="profile-info">
          <img class="avatar" src="{{ asset('resume/cv1/assets/images/Happy-Man.png') }}">
          <div class="about">
            <h1 class="name">{{$data['basicInfo']->first_name }}{{" " .$data['basicInfo']->last_name }}</h1>
            <span class="position">{{$data['basicInfo']->profession }}</span>
          </div>
          <div class="contacts">
            <div class="contacts-item">
              <i class="fas fa-phone-volume" style="height: 27px;"></i>
              <h3 class="contacts-title"> Phone </h3>
              <a href="tel:+18001234567" class="contacts-text">{{$data['basicInfo']->phone }}</a>
            </div>
            <div class="contacts-item">
              <i class="fas fa-envelope" style="height: 27px;"></i>
              <h3 class="contacts-title"> Email </h3>
              <a href="mailto: {{$data['basicInfo']->email }}" class="contacts-text"> {{$data['basicInfo']->email }}</a>
            </div>
            <div class="contacts-item">
              <i class="fas fa-globe-americas" style="height: 27px;"></i>
              <h3 class="contacts-title"> Web </h3>
              <a href="{{$data['basicInfo']->website }}" class="contacts-text">{{$data['basicInfo']->website }}</a>
            </div>
            <div class="contacts-item">
              <i class="fas fa-map-marker-alt" style="height: 27px;"></i>
              <h3 class="contacts-title"> Home </h3>
              <address class="contacts-text"> {{$data['basicInfo']->post_code }},{{$data['basicInfo']->address }}</address>
            </div>
          </div>
        </div>
      </div>
      <div class="profile" style="background:#eedfda;">
        <!-- <div class="profile-photo"></div>-->
        <div class="profile-info" style="margin-top: 70px;">
          <h2 class="heading heading-light"> WORK EXPERIENCE </h2>
          <div class="experience">
            @foreach ($data['works'] as $work)
                <ul style="margin-top:15px;">
                  <span class="list-item__date">{{$work->year }} - {{isset($work->year_end)?$work->year_end:null }}</span>
                  <h4 class="list-item__title">{{$work->company_name }}</h4>
                  <li>
                    <p class="list-item__text">{{isset($work->about)?$work->about:null }}</p>
                  </li>
                </ul>
            @endforeach
           {{--  <ul>
              <span class="list-item__date">Jan 2016 - 0ct 2016</span>
              <h4 class="list-item__title">Exquisite Technologies</h4>
              <li>
                <p class="list-item__text">Fleeing from the Cylon tyranny the last Battlestar – Galactica - leads a rag-tag fugitive fleet on a lonely quest - a shining planet known as Earth? Texas tea.</p>
              </li>
            </ul>
            <ul>
              <span class="list-item__date">Jan 2016 - 0ct 2016</span>
              <h4 class="list-item__title">Exquisite Technologies</h4>
              <li>
                <p class="list-item__text">Fleeing from the Cylon tyranny the last Battlestar – Galactica - leads a rag-tag fugitive fleet on a lonely quest - a shining planet known as Earth? Texas tea.</p>
              </li>
            </ul> --}}
          </div>
          <div class="education">
            <h2 class="heading heading-light"> EDUCATION </h2>
            @foreach ($data['educations'] as $work)
                
                <ul>
                    <span class="list-item__date">{{$work->year }}- {{isset($work->year_end)?$work->year_end:null }}</span>
                      <h4 class="list-item__title">{{$work->institute }}</h4>
                      <span class="list-item__date">{{$work->degree }}</span>
                      <li>
                        <p class="list-item__text">{{ isset($work->about)?$work->about:null }}</p>
                      </li>
                    </ul>
            @endforeach
            {{-- <ul>
              <span class="list-item__date">Jan 2013 - Jan 2015</span>
              <h4 class="list-item__title">Gove Islamia College Lahore</h4>
              <span class="list-item__date">ICS STATISTICS</span>
              <li>
                <p class="list-item__text">Fleeing from the Cylon tyranny the last Battlestar – Galactica - leads a rag-tag fugitive fleet on a lonely quest - a shining planet known as Earth? Texas tea.</p>
              </li>
            </ul>
            <ul>
              <span class="list-item__date">Jan 2011 - 0ct 2013</span>
              <h4 class="list-item__title">Matriculation</h4>
              <span class="list-item__date">Science</span>
              <li>
                <p class="list-item__text">Fleeing from the Cylon tyranny the last Battlestar – Galactica - leads a rag-tag fugitive fleet on a lonely quest - a shining planet known as Earth? Texas tea.</p>
              </li>
            </ul> --}}
          </div>
        </div>
      </div>
      <script src="{{ asset('resume/cv1/assets/plugins/popper.min.js') }}" defer></script>
      <script src="{{ asset('resume/cv1/assets/plugins/bootstrap/js/bootstrap.min.js') }}" defer></script>
  </body>
</html>