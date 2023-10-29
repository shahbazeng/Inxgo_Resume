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
  <!-- FontAwesome JS-->
  <!-- Theme CSS -->
</head>
<style>
.heading {
  margin: 0;
  padding-bottom: 16px;
  padding-top: 16px;
  text-transform: uppercase;
  font-weight: 700;
}

.heading-light {
  font-family: roboto;
  text-align: center;
  background: #d99e8c;
  color: #000;
  border-radius: 8%;
  justify-content: center;
  align-items: center;
  font-size: 17px;
}

.profile-info {
  margin: auto;
  width: 64%;
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 50px;
  padding-bottom: 70px;
}

.container {}

.profile {}

.list-item__title {
  font-family: roboto;
  font-size: 15px;
  text-transform: uppercase;
  margin-bottom: 5px;
}

.contacts-text {
  font-family: roboto;
  color: black;
  text-decoration: none;
  font-weight: 450;
  line-height: 20.97px;
}

.list-item__date {
  font-family: roboto;
  font-size: 12px;
  text-transform: uppercase;
}

.profile-text {
  font-family: roboto;
  font-size: 15px;
  line-height: 24.19px;
  margin-bottom: 30px;
}

.avatar {
  width: 259px;
  height: 259px;
  border-radius: 50%;
  background-color: White;
}

.about {
  padding-bottom: 20px;
  border-bottom: solid white;
  text-align: center;
  margin-bottom: 15px;
}

.body {
  background-color: #eedfda;
}
</style>

<body class={{ $data[ 'flag']? 'body': '' }} style="max-width: 850px ;">
  <div class="row col-md-12"> @if(!$data['flag'])
    <div class="col-6 text-right" style="display: flex;
          width: 850px;
          justify-content: space-between;
          margin: 20px auto;"> <a href="{{ url('pdf_download2/'.$data['basicInfo']->user_id)}}" class="btn btn-primary" onclick="return confirm('Are you Sure ?')">Download</a> </div> @endif
    <div class="container" style=" display: flex;
          width: 850px;
          background-color: #eedfda;
          justify-content: space-between;
          margin: 20px auto;
          box-shadow: 1px 1px 10px rgba(0,0,0,0.1);">
      <div class="profile" style="margin-left: 0px!important;  height: 100%;width: 240px;display: inline-block; ;
          background-color: #39383a;
          color: #000;background:#eedfda;float:left;">
        <!--  <div class="profile-photo"></div>-->
        <div class="profile-info" style="margin: auto;
        width: 64%;
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 50px;
        padding-bottom: 70px;margin-top: 70px;">
          <h2 class="heading heading-light" style="height: 28px;
        width: 170px;"> Profile </h2>
          <p class="profile-text"> {{$data['objective']->career_object }} </p>
          <div class="contacts">
            <h2 class="heading heading-light" style="height: 28px;
          width: 170px;"> EXPERTISE </h2>
            <ul style="font-size: 15px;font-family: roboto;"> @foreach ($data['expert'] as $index)
              <li>{{ $index->name }}</li> @endforeach() </ul>
          </div>
          <h2 class="heading heading-light" style="height: 28px;width: 170px;">SKILLS</h2>
          <div class="skills">
            <ul class="skills-list"> @foreach ($data['skill'] as $index)
              <li class="skills-list__item"> {{ $index->name }}
                <div class="level level-{{ $index->percentage }}"></div>
              </li> @endforeach() </ul>
          </div>
          <h2 class="heading heading-light" style="height: 28px;width: 170px;">REREFRENCES</h2> @foreach ($data['references'] as $index)
          <ul style="margin-top:15px;">
            <h3 class="list-item__title">{{ $index->name}}</h3> <span class="list-item__date">{{ $index->year}}-{{ $index->year_end}}</span>
            <li> <a href="tel:{{ $index->about}}" class="contacts-text">{{ $index->about}}</a> </li>
          </ul> @endforeach() {{--
          <ul style="margin-top:25px;">
            <h3 class="list-item__title">Exquisite Technologies</h3> <span class="list-item__date">Jan 2016 - 0ct 2016</span>
            <li> <a href="tel:+18001234567" class="contacts-text">+92 304 4675774</a> </li>
          </ul>
          <ul style="margin-top:15px;">
            <h3 class="list-item__title">Exquisite Technologies</h3> <span class="list-item__date">Jan 2016 - 0ct 2016</span>
            <li> <a href="tel:+18001234567" class="contacts-text">+92 304 4675774</a> </li>
          </ul> --}} </div>
      </div>
      <div class="profile" style=" height: 100%; width: 280px;float:left;display: inline-block;background:#d99e8c;border-top-left-radius: 150px;border-top-right-radius: 150px;">
        <!--<div class="profile-photo"></div>-->
        <div class="profile-info" style="margin: auto;
            width: 70%;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 50px;
            padding-bottom: 70px;margin-top: 70px;">

            @if($data['basicInfo']->image)
              <img class="avatar" style=" width: 200px;height: 200px;background-color: White;" src="{{asset('images/').'/'.$data['basicInfo']->image}}">
            @else
                <img class="avatar" style=" width: 200px;height: 200px;background-color: White;" src="{{  $data['url'] .'resume/cv1/assets/images/Happy-Man.png' }}">
            @endif


            
          <div class="about">
            <h1 class="name">{{$data['basicInfo']->first_name }}{{" " .$data['basicInfo']->last_name }}</h1> <span class="position">{{$data['basicInfo']->profession }}</span> </div>
          <div class="contacts">
            <div class="contacts-item"> <i class="fas fa-phone-volume" style="height: 27px;"></i>
              <h3 class="contacts-title"> Phone </h3> <a href="tel:+18001234567" class="contacts-text">{{$data['basicInfo']->phone }}</a> </div>
            <div class="contacts-item"> <i class="fas fa-envelope" style="height: 27px;"></i>
              <h3 class="contacts-title"> Email </h3> <a href="mailto: {{$data['basicInfo']->email }}" class="contacts-text"> {{$data['basicInfo']->email }}</a> </div>
            <div class="contacts-item"> <i class="fas fa-globe-americas" style="height: 27px;"></i>
              <h3 class="contacts-title"> Web </h3> <a href="{{$data['basicInfo']->website }}" class="contacts-text">{{$data['basicInfo']->website }}</a> </div>
            <div class="contacts-item"> <i class="fas fa-map-marker-alt" style="height: 27px;"></i>
              <h3 class="contacts-title"> Home </h3> <address class="contacts-text"> {{$data['basicInfo']->post_code }},{{$data['basicInfo']->address }}</address> </div>
          </div>
        </div>
      </div>
      <div class="profile" style="  height: 100%;width: 220px;float:left;display: inline-block;background:#eedfda;">
        <!-- <div class="profile-photo"></div>-->
        <div class="profile-info" style="margin: auto;
            width: 64%;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 50px;
            padding-bottom: 70px;margin-top: 70px;">
          <h2 class="heading heading-light" style="height: 28px;width: 170px;"> WORK EXPERIENCE </h2>
          <div class="experience"> @foreach ($data['works'] as $work)
            <ul style="margin-top:15px;"> <span class="list-item__date">{{$work->year }} - {{isset($work->year_end)?$work->year_end:null }}</span>
              <h4 class="list-item__title">{{$work->company_name }}</h4>
              <li>
                <p class="list-item__text">{{isset($work->about)?$work->about:null }}</p>
              </li>
            </ul> @endforeach {{--
            <ul> <span class="list-item__date">Jan 2016 - 0ct 2016</span>
              <h4 class="list-item__title">Exquisite Technologies</h4>
              <li>
                <p class="list-item__text">Fleeing from the Cylon tyranny the last Battlestar – Galactica - leads a rag-tag fugitive fleet on a lonely quest - a shining planet known as Earth? Texas tea.</p>
              </li>
            </ul>
            <ul> <span class="list-item__date">Jan 2016 - 0ct 2016</span>
              <h4 class="list-item__title">Exquisite Technologies</h4>
              <li>
                <p class="list-item__text">Fleeing from the Cylon tyranny the last Battlestar – Galactica - leads a rag-tag fugitive fleet on a lonely quest - a shining planet known as Earth? Texas tea.</p>
              </li>
            </ul> --}} </div>
          <div class="education">
            <h2 class="heading heading-light" style="height: 28px;width: 170px;"> EDUCATION </h2> @foreach ($data['educations'] as $work)
            <ul> <span class="list-item__date">{{$work->year }}- {{isset($work->year_end)?$work->year_end:null }}</span>
              <h4 class="list-item__title">{{$work->institute }}</h4> <span class="list-item__date">{{$work->degree }}</span>
              <li>
                <p class="list-item__text">{{ isset($work->about)?$work->about:null }}</p>
              </li>
            </ul> @endforeach {{--
            <ul> <span class="list-item__date">Jan 2013 - Jan 2015</span>
              <h4 class="list-item__title">Gove Islamia College Lahore</h4> <span class="list-item__date">ICS STATISTICS</span>
              <li>
                <p class="list-item__text">Fleeing from the Cylon tyranny the last Battlestar – Galactica - leads a rag-tag fugitive fleet on a lonely quest - a shining planet known as Earth? Texas tea.</p>
              </li>
            </ul>
            <ul> <span class="list-item__date">Jan 2011 - 0ct 2013</span>
              <h4 class="list-item__title">Matriculation</h4> <span class="list-item__date">Science</span>
              <li>
                <p class="list-item__text">Fleeing from the Cylon tyranny the last Battlestar – Galactica - leads a rag-tag fugitive fleet on a lonely quest - a shining planet known as Earth? Texas tea.</p>
              </li>
            </ul> --}} </div>
        </div>
      </div>
    </div>
</body>

</html>