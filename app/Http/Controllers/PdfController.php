<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CareerObject;
use App\basicInfo;
use App\Certificate;
use App\Education;
use App\Work;
use App\Skill;
use App\Expert;
use App\References;
use PDF;

class PdfController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id=null){
        if($id)
        {
            $usrId = $id;
        }
        else
        {
            $usrId = Auth::user()->id;
        }
        $data= array();
        $url=config('app.url');
        $data['url']=$url;
        $data['flag']=0;
        $data['basicInfo'] = basicInfo::where('user_id', $usrId)->first();
        $data['objective'] = CareerObject::where('user_id', $usrId)->first();
        $data['educations'] = Education::where('user_id', $usrId)->get();
        $data['works'] = Work::where('user_id', $usrId)->get();
        $data['cetificates'] = Certificate::where('user_id', $usrId)->get();
        $data['skill'] = Skill::where('user_id', $usrId)->get();
        $data['expert'] = Expert::where('user_id', $usrId)->get();
        $data['references'] = References::where('user_id', $usrId)->get();
        return view('pdf.cv2',compact('data'));
    }
   public function index2($id=null){
        if($id)
        {
            $usrId = $id;
        }
        else
        {
            $usrId = Auth::user()->id;
        }
        $data= array();
        $url=config('app.url');
        $data['url']=$url;
        $data['flag']=0;
        $data['basicInfo'] = basicInfo::where('user_id', $usrId)->first();
        $data['objective'] = CareerObject::where('user_id', $usrId)->first();
        $data['educations'] = Education::where('user_id', $usrId)->get();
        $data['works'] = Work::where('user_id', $usrId)->get();
        $data['cetificates'] = Certificate::where('user_id', $usrId)->get();
        $data['skill'] = Skill::where('user_id', $usrId)->get();
        $data['expert'] = Expert::where('user_id', $usrId)->get();
        $data['references'] = References::where('user_id', $usrId)->get();
        return view('pdf.cv1',compact('data'));
    }
    public function download2($id=null){
        if($id)
        {
            $usrId = $id;
        }
        else
        {
            $usrId = Auth::user()->id;
        }
        $data= array();
        $data['flag']=1;
        $url=config('app.url');
        $data['basicInfo'] = basicInfo::where('user_id', $usrId)->first();
        $data['objective'] = CareerObject::where('user_id', $usrId)->first();
        $data['educations'] = Education::where('user_id', $usrId)->get();
        $data['works'] = Work::where('user_id', $usrId)->get();
        $data['cetificates'] = Certificate::where('user_id', $usrId)->get();
        $data['skill'] = Skill::where('user_id', $usrId)->get();
        $data['expert'] = Expert::where('user_id', $usrId)->get();
        $data['references'] = References::where('user_id', $usrId)->get();
        $data['url']=$url;

        
        $pdf = PDF::loadView('pdf.cv1',compact('data'));
        // dd($pdf);
        return $pdf->stream('resume.pdf');
        // return $pdf->download('myresume.pdf');
    }
    public function index3($id=null){
        if($id)
        {
            $usrId = $id;
        }
        else
        {
            $usrId = Auth::user()->id;
        }
        $data= array();
        $url=config('app.url');
        $data['url']=$url;
        $data['basicInfo'] = basicInfo::where('user_id', $usrId)->first();
        $data['objective'] = CareerObject::where('user_id', $usrId)->first();
        $data['educations'] = Education::where('user_id', $usrId)->get();
        $data['works'] = Work::where('user_id', $usrId)->get();
        $data['cetificates'] = Certificate::where('user_id', $usrId)->get();
        $data['skill'] = Skill::where('user_id', $usrId)->get();
        $data['expert'] = Expert::where('user_id', $usrId)->get();
        $data['references'] = References::where('user_id', $usrId)->get();
        return view('pdf.index',compact('data'));
    }

    public function download3($id=null){
        if($id)
        {
            $usrId = $id;
        }
        else
        {
            $usrId = Auth::user()->id;
        }
        $data= array();
        $data['flag']=1;
        $url=config('app.url');
        $data['url']=$url;
        $data['basicInfo'] = basicInfo::where('user_id', $usrId)->first();
        $data['objective'] = CareerObject::where('user_id', $usrId)->first();
        $data['educations'] = Education::where('user_id', $usrId)->get();
        $data['works'] = Work::where('user_id', $usrId)->get();
        $data['cetificates'] = Certificate::where('user_id', $usrId)->get();
        $data['skill'] = Skill::where('user_id', $usrId)->get();
        $data['expert'] = Expert::where('user_id', $usrId)->get();
        $data['references'] = References::where('user_id', $usrId)->get();
        $data['url']=$url;
         $data['flag']=1;
        $pdf = PDF::loadView('pdf.cv2',compact('data'));
        return $pdf->stream('resume.pdf');
    }


    public function download($id=null){
        if($id)
        {
            $usrId = $id;
        }
        else
        {
            $usrId = Auth::user()->id;
        }
        $data= array();

        $data['basicInfo'] = basicInfo::where('user_id', $usrId)->first();
        $data['objective'] = CareerObject::where('user_id', $usrId)->first();
        $data['educations'] = Education::where('user_id', $usrId)->get();
        $data['works'] = Work::where('user_id', $usrId)->get();
        $data['cetificates'] = Certificate::where('user_id', $usrId)->get();
        $data['skill'] = Skill::where('user_id', $usrId)->get();
        $data['expert'] = Expert::where('user_id', $usrId)->get();
        $data['references'] = References::where('user_id', $usrId)->get();
        PDF::setOptions(['dpi' => 250, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('pdf.index',compact('data'));
        return $pdf->stream('myresume.pdf');
    }
}
