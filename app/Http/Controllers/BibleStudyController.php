<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BibleStudy;

class BibleStudyController extends Controller
{
        public function biblestudyrequests(Request $request) {
            
            $biblestudyrequests = new BibleStudy();
            return view('/biblestudyrequestform', compact('biblestudyrequests'));

        }

        public function create(Request $request) {
            $biblestudyrequests = new BibleStudy();
            $biblestudyrequests->fullname = $request->fullname;
            $biblestudyrequests->email = $request->email;
            $biblestudyrequests->contact = $request->contact;
            $biblestudyrequests->birthdate = $request->birthdate;
            $biblestudyrequests->religion = $request->religion;
            $biblestudyrequests->date = $request->date;
            $biblestudyrequests->time = $request->time;
            $biblestudyrequests->location = $request->location;

            if ($biblestudyrequests->save()){
                return redirect('/thank-you');
            }
            return redirect('/thank-you');
        }

        public function tableform(Request $request) {
            
            $biblestudyrequests = BibleStudy::all();
            return view('/biblestudyrequests', compact('biblestudyrequests'));
            
        }

        public function thankyou(Request $request) {

            return view('/thankyou');
        }
    
}