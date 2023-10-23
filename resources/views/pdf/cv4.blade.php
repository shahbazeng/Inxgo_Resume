<!DOCTYPE html>
<html>

<head>
  <title>Resume Template 4</title>
   @if(!isset($data['flag']) )
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   @endif
</head> 
<style type="text/css">
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}
h1
{
  font-size: 50px;
      margin-block-start: 0.3em;
    margin-block-end: 0.3em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    line-height: 1.5;
}

.resume-container {

 /* Set a negative z-index to position the background overlay behind the resume container */
}
.left-side {

}

.right-side {
  width: 415px;
      height: 600px;
  padding-left: 13px;
  background-color: white;
  /*padding: 55px;*/
  color: black;
   margin-top:5px;
       position: absolute;
  margin-left:34px;
  margin-bottom:63px;
  border-top-left-radius:20px;
  border-bottom-left-radius:20px;
  display:inline-block;
}
.right-sideh {
 text-align: center;
}

.profile-image {
  
}
.profile-image img {
  /* Ensure the image covers the entire container */
}
.about-section, .expertise-section, .language-section, .references-section {
  
}

.language-item, .expertise-item {
  /*display: flex;*/
  align-items: center;
}

.progress-bar {
  margin-left: 15px;
  width: 100px;
  height: 10px;
  display:inline-block;
  background-color: lightgray;
}

.progress {
  /*margin-left: 30px;*/
  /*height: 100%;*/
  background-color: white;
}

.name-section {
  margin-bottom: 20px;
  color: #007480;
}

.contact-section ul {
  list-style-type: none;
  padding: 0;
}

.contact-section ul li {
  margin-bottom: 10px;
}

.education-item {
  display: inline-block;
  flex-wrap: wrap;
  align-items: center;
  margin-top: 5px;
}

.year, .school-name {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-right: 10px;
  font-weight: 600;
} 

.contact-item {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  margin-top: 5px;
}

.year, .school-name {
  white-space: nowrap;
  display: inline-block;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-right: 10px;
  font-weight: 600;
}
p
{
  display: inline-block;
}
.fa {
  margin-right: 5px;
}  
.icon-container {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 31px;
  height: 31px;
  border: 2px solid #007480;
  border-radius: 50%;
  margin-right: 10px;
}

.icon-container i {
  color: #007480;
}


</style>

<body>
  @if(!isset($data['flag']) )
  <div class="row col-6 text-right">
    <a href="{{url('pdf_download4/'.$data['basicInfo']->user_id)}}" style="float: right" class="btn btn-primary" onclick="return confirm('Are you Sure ?')">Download</a>
  </div>
   @endif
   @if(isset($data['flag']) && $data['flag'])
    <div class="resume-container" style=" 
     background: #187c8c;
    width: 700px;
    height: 800px;
    justify-content:center;
    margin:20px auto;
    padding-top: 100px;
    box-shadow: 1px 1px 10px rgba(0,0,0,0.1);
  /*background-image: url("../images/shape.jpg");*/
    background-size: cover;
    background-position: center;
  z-index: -1;">
    @else
       <div class="resume-container" style=" 
     background: #187c8c;
    width: 700px;
    height: 100%;
    justify-content:center;
    margin:20px auto;
    padding-top: 100px;
    box-shadow: 1px 1px 10px rgba(0,0,0,0.1);
  /*background-image: url("../images/shape.jpg");*/
    background-size: cover;
    background-position: center;
  z-index: -1;">
    @endif
   @if(isset($data['flag']) && $data['flag'])
   <div class="left-side" style="margin-top: 60px;display:inline-block;width: 200px;color: white;padding: 20px;">
    @else
    <div class="left-side" style="margin-top: -9px;display:inline-block;width: 200px;color: white;padding: 20px;">
    @endif
     <div class="profile-image" style="
         margin-left: 18px;width: 198px;height: 220px;background-color: #fff;border-radius: 30px;">
      <img style=" width: 100%;height: 100%;object-fit: cover;" src="{{  $data['url'] .'resume/cv1/assets/images/Happy-Man.png' }}">
    </div>
    <div class="about-section" style="">
      <h2>About</h2>
      <p>
        {{$data['objective']->career_object }}
    </div>
    <div class="expertise-section" style="">
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
    <div class="language-section" >
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
    
    <div class="references-section" >
      <h2>References</h2>
       @foreach ($data['references'] as $index)
      <p>{{ $index->name}}</p>
       @endforeach

    </div>
    
  </div>
 
  <div class="right-side">
      <div class="name-section" >
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
    @if(isset($data['flag']) && $data['flag'])
      <p style="position: absolute;margin-top: -10px;">{{ isset($work->about)?$work->about:null }}</p>
    @else
    <p style="position: absolute;margin-top: -4px;">{{ isset($work->about)?$work->about:null }}</p>
    @endif
    </div>
  </div>
  @endforeach
</div>

</body>

</html>
