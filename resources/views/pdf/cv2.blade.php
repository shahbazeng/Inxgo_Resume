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
    <!-- Theme CSS -->  
    <!-- Theme CSS -->
     <link href="{{ asset('resume/cv2/assets/css/style.css') }}" rel="stylesheet">
<!-- FONTS -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  </head>

<body>
<!-- PAGE STUFF -->
<div class="rela-block page">
 
    <div class="side-bar">
        <div class="container">
        <div class="mugshot">
          <div class="logo">
            <img class="avatar" src={{ asset('resume/cv2/assets/images/Happy-Man.png')}}>
          </div>
        </div>
        <p class="rela-block caps side-header">Contact</p>
        <p>{{$data['basicInfo']->phone }}</p>
        <p>{{$data['basicInfo']->email }}</p>
         <p>{{$data['basicInfo']->post_code }},{{$data['basicInfo']->address }}</p>
        <!--<p class="rela-block social twitter">Twitter stuff</p>
        <p class="rela-block social pinterest">Pinterest things</p>
        <p class="rela-block social linked-in">Linked-in man</p>-->
        <p class="rela-block caps side-header">Expertise</p>
        @foreach ($data['expert'] as $index)
                <p class="rela-block list-thing">{{ $index->name }}</p>
          @endforeach()
    </div>
</div>
    <div class="rela-block content-container">
         <div class="nametitle"><h2>
          {{$data['basicInfo']->first_name }}{{" " .$data['basicInfo']->last_name }}
          </h2> <h3> {{$data['basicInfo']->profession }}</h3></div>
        
        <div class="rela-block caps greyed">About Me</div>
        <p class="long-margin">{{$data['objective']->career_object }}</p>
        <div class="rela-block caps greyed">Experience</div>

         @foreach ($data['works'] as $key=> $work)
              <h3>Job #{{$key+1}}</h3>
              <p class="light">{{$work->company_name }}</p>
              <p class="justified">
                {{isset($work->about)?$work->about:null }}
              </p>
            @endforeach
        <div class="rela-block caps greyed">Education</div>

        @foreach ($data['educations'] as $key=> $work)
            <h3>Education #{{$key+1}}</h3>
            <p class="light">{{$work->institute }}</p>
            <p class="justified">
              {{isset($work->about)?$work->about:null }}
            </p>
          @endforeach
    </div>
</div>
</body>
</html> 
