<!DOCTYPE html>
<html>

<head>
  <title>Resume Template 3</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet"href="{{ asset('resume/cv4/css/style.css')}}">
</head> 

<body>
      <div class="resume-container">
  <div class="left-side">
    <div class="profile-image">
      <img src="{{url('resume/cv4/images/Happy-Man.png') }}">
    </div>
    <div class="about-section">
      <h2>About</h2>
      <p>
        {{$data['objective']->career_object }}
    </div>
    <div class="expertise-section">
      <h2>Expertise</h2>
      @foreach ($data['expert'] as $index)
        <div class="expertise-item">
          <p>{{ $index->name }}</p>

          <div class="progress-bar">
            <div class="progress" style="margin-left:{{ $index->percentage }}px"></div>
          </div>
        </div>

      @endforeach()
      
       
    </div>
    <div class="language-section">
      <h2>Languages</h2>
      @foreach ($data['skill'] as $index)
      <div class="language-item">
        <p>{{$index->name}}</p>
        <div class="progress-bar">
          {{-- $index->name --}}
          <div class="progress" style="margin-left:{{ $index->percentage }}px"></div>
        </div>
      </div>
     @endforeach
    </div>
    <div class="references-section">
      <h2>References</h2>
       @foreach ($data['references'] as $index)
      <p>{{ $index->name}}</p>
       @endforeach

    </div>
  </div>
  <div class="right-side">
    <div class="name-section">
      <h1>{{$data['basicInfo']->first_name }} <br> {{" " .$data['basicInfo']->last_name }}</h1>
    </div>
    <div class="job-role-section">
      <h2>{{$data['basicInfo']->profession }}</h2>
    </div>
    <div class="contact-section">
  <ul>
    <li>
      <div class="icon-container">
        <i class="fas fa-phone"></i>
      </div>
       {{$data['basicInfo']->phone }}
      <div class="icon-container">
        <i class="fas fa-envelope"></i>
      </div>
       {{$data['basicInfo']->email }}
    </li>
    
    <li>
      <div class="icon-container">
        <i class="fas fa-map-marker"></i>
      </div>
     {{$data['basicInfo']->post_code }},{{$data['basicInfo']->address }}
    </li>
  </ul>
</div>
    <div class="education-section">
  <h2 style="color: #007480;">Education</h2>
  @foreach ($data['educations'] as $work)
  <div class="education-item">
    <div class="year">{{ $work->year}}</div>
    <div class="school-name">{{$work->institute}}</div>
      <p>{{ isset($work->about)?$work->about:null }}</p>
    </div>
  </div>
  @endforeach
</div>

</body>

</html>
