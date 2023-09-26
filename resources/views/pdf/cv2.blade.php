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
  </head>
  <style type="text/css">
      * {
        box-sizing: border-box;
        transition: 0.35s ease;
      }
      .mugshot .logo {
          margin: -23px;
      }
      .content-container > h3 {
          margin: 0 auto 5px;
      }
      .content-container > * {
          margin: 0 auto 25px;
      }

      .avatar {
          border: solid #f7e0c1 18px;
          width: 259px;
          height: 259px;
          /*border-radius: 50%;*/
          background-color: White;
      }
      .greyed {
          background-color: #9f610e;
          width: 100%;
          max-width: 250px;
          text-align: center;
          border-radius: 0px 79px 79px 5px;
          font-family: "Open Sans";
          font-size: 34px;
          font-weight: bolder;
          letter-spacing: 2px;
          line-height: 100px;
          margin-left: -50px;
      }
      .nametitle {
          height: 210px;
          border-radius: 0px 100px 100px 0px;
          background-color: #f7e0c1;
          width: 100%;
          max-width: 700px;
          text-align: center;
          font-family: "Open Sans";
          font-size: 18px;
          font-weight: 600;
          letter-spacing: 6px;
          line-height: 100px;
          margin-left: -50px;
      }
      .content-container > p.long-margin {
          margin: 0 auto 50px;
      }
      .content-container > * {
          margin: 0 auto 25px;
      }
      p.light {
          color: #777;
      }
      .justified {
          text-align: justify;
      }
      body{
        font-family: 'Open Sans';
          font-size: 18px;
          letter-spacing: 0px;
          font-weight: 400;
          line-height: 28px;
          background: url(http://kingofwallpapers.com/leaves/leaves-016.jpg) right no-repeat;
          background-size: cover;
      }
      .page {
          /*width: 90%;*/
          max-width: 1200px;
          margin: 80px auto;
          background-color: white;
          box-shadow: 6px 10px 28px 0px rgba(0, 0, 0, 0.4);
      }
      .rela-block {
        display: block;
        position: relative;
        margin: auto;
      }
      .side-bar {
          
      }
      .container {
          height: 895px;
          background-color: #F7E0C1;
          width: 340px;
          text-align: center;
          margin-top: 289px;
          border-radius: 70px;
      }
      .mugshot {
          position: relative;
          top: $x;
          right: $x;
          bottom: 206px;
          left: $x;
          width: 210px;
          height: 88px;
          margin: 70px;
      }
      .side-header {
          font-family: "Open Sans";
          font-size: 24px;
          font-weight: bold;
          line-height: 28px;
          margin: 60px auto 10px;
          padding-bottom: 10px;
      }
      .caps {
          text-transform: uppercase;
      }
      .list-thing {
          padding-left: 25px;
          margin-bottom: 10px;
      } 
      .content-container {
          margin-right: 0;
          width: calc(95% - 350px);
          padding: 25px 40px 50px;
      }
  </style>
  <body>
    <!-- PAGE STUFF -->
    <div class="rela-block page">
      <div class="row col-12 text-right">
        <a href="{{ url('pdf_download2')}}" style="float: right" class="btn btn-primary" onclick="return confirm('Are you Sure ?')">Download</a>
      </div>
      <div class="side-bar" style="position: absolute;top: $x;right: 60px;bottom: $x;left: 0;width: 400px;background-color: #9f610e;padding: 6px 30px 50px;height: 100%;">
        <div class="container">
          <div class="mugshot">
            <div class="logo">
              <img class="avatar" src="{{  $data['url'] .'resume/cv1/assets/images/Happy-Man.png' }}">
            </div>
          </div>
          <p class="rela-block caps side-header">Contact</p>
          <p>{{$data['basicInfo']->phone }}</p>
          <p>{{$data['basicInfo']->email }}</p>
          <p>{{$data['basicInfo']->post_code }},{{$data['basicInfo']->address }}</p>
          <!--<p class="rela-block social twitter">Twitter stuff</p><p class="rela-block social pinterest">Pinterest things</p><p class="rela-block social linked-in">Linked-in man</p>-->
          <p class="rela-block caps side-header">Expertise</p> @foreach ($data['expert'] as $index) <p class="rela-block list-thing">{{ $index->name }}</p> @endforeach()
        </div>
      </div>
      <div class="rela-block content-container" >
        <div class="nametitle">
           {{--  <h2>
              {{$data['basicInfo']->first_name }}{{" " .$data['basicInfo']->last_name }}
            </h2>
            <h3> {{$data['basicInfo']->profession }}</h3> --}}
        </div>
        <div class="rela-block caps greyed">About Me</div>
        <p class="long-margin">{{$data['objective']->career_object }}</p>
        <div class="rela-block caps greyed">Experience</div>
        @foreach ($data['works'] as $key=> $work) <h3>Job #{{$key+1}}</h3>
          <p class="light">{{$work->company_name }}</p>
          <p class="justified">
            {{isset($work->about)?$work->about:null }}
          </p>
          @endforeach <div class="rela-block caps greyed">Education</div>
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