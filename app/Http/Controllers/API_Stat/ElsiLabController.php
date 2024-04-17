<?php

namespace App\Http\Controllers\API_Stat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DateTime;
use App\Models\ElsiLabStat;
use App\Models\InitiativeStat;
use App\Models\Colleges;
use Str;

class ElsiLabController extends Controller
{
    //get elsi lab count
    public function elsiLabCount(Request $request, $year = null){
    	$current_year = (new DateTime)->format("Y");
    	//if year is nu
    	if($year == null || $year >= $current_year){
    		$year = $current_year - 1;
    	}

    	if($year <= 2013){
    		$year = 2013;
    	}

		$data = ElsiLabStat::where(['year' => $year, 'active' => 1])
			->where('number_of_labs','>',0)
			->orderBy('state', 'ASC')
			->get(['state', 'year', 'number_of_labs']);
		
		$data->map(function ($countData) {
        	$colleges = Colleges::where([
        		['IS_eLSI', '=', 1], 
        		['state', '=', $countData['state']],
        		[DB::Raw('YEAR(inauguration_date)'), '=', $countData['year']]	
        	])->get(['clg_code','IS_eLSI','college_name','district','city','pincode']);

		    $countData['elsi_colleges_list'] = $colleges;
		    return $countData;
		});	

    	return response()->json([
    		'KPI' => 'Number of eLSI Labs Established',
    		'Category' => 'Administrative',
    		'frequency' => 'Annually',
    		'description' => 'https://e-yantra.org/elsi',
    		'data' => $data,
    	]);
    }

    //get elsi colleges by year and state
    public function elsiCollegeList(Request $request, $year = null, $state){
        $current_year = (new DateTime)->format("Y");
        //if year is nu
        if($year == null || $year >= $current_year){
            $year = $current_year - 1;
        }

        if($year <= 2013){
            $year = 2013;
        }

        $state = ElsiLabStat::where(['year' => $year, 'active' => 1, 'state' => $state])->first();
        $data = $state->elsi_colleges->where('IS_eLSI',1)->where('inauguration_year','=', $year);

        return response()->json([
            'KPI' => 'eLSI College List By State and Year',
            'Category' => 'Administrative',
            'frequency' => 'Annually',
            'description' => 'https://e-yantra.org/elsi',
            'data' => $data,
        ]);
    }

    //get elsi colleges by state
    public function elsiStateCollegeList(Request $request, $state){
        if(Colleges::where(['country' => 'India', 'state' => $state])->exists()){        	
        	$data = Colleges::where(['IS_eLSI' => 1, 'state' => $state, 'country' => 'India'])
        		->orderBy('inauguration_date','asc')
        		->orderBy('college_name','asc')
        		->get(['clg_code','college_name','state','district','city','pincode','address','inauguration_date']);
        	return response()->json([
        		'KPI' => 'eLSI College List By State',
        		'Category' => 'Administrative',
        		'frequency' => 'Annually',
        		'description' => 'https://e-yantra.org/elsi',
        		'total_colleges' => $data->count(),
        		'data' => $data,
        	]);
        } else {
        	return response()->json([
        		'message' => 'Given State is not exist in our list',
        	], 404);
        }        
    }

    //get initiative stats yearwise
    public function engagement_level(Request $request, $year = null){
        $current_year = (new DateTime)->format("Y");
        //if year is nu
        if($year == null || $year >= $current_year){
            $year = $current_year - 1;
        }

        if($year <= 2018){
            $year = 2018;
        }

        $data = InitiativeStat::where(['year' => $year])
            ->get([
            	'initiative',
            	'year',
            	'number_of_colleges_participated',
            	'number_of_workshop_conducted',
            	'registered_participants',
            	'trained_participants',
		      	'level_1',
		      	'level_2',
		      	'level_3',
		      	'level_4',
		  	]);

        return response()->json([
            'KPI' => 'Engagement level',
            'Category' => 'Operational',
            'frequency' => 'Annually',
            'description' => '',
            'data' => $data,
        ]);
    }

    //get initiative stats yearwise
    public function engagement_level_initiative(Request $request, $initiative){
        if(InitiativeStat::where('initiative', $initiative)->exists()){        	
        	if(Str::lower($initiative) == "workshops"){
        		$get = [
	            	'initiative',
	            	'year',
	            	'number_of_colleges_participated',
	            	'number_of_workshop_conducted',
	            	'registered_participants',
	            	'trained_participants',
			      	'level_1 as completion_certificate',				      	
			  	];
			} elseif(Str::lower($initiative) == "mooc") {
				$get = [
	            	'initiative',
	            	'year',
	            	'number_of_colleges_participated',
	            	'registered_participants',
	            	'trained_participants',
			      	'level_1',
			      	'level_2',
			      	'level_3',
			  	];
			} else {
			  	$get = [
	            	'initiative',
	            	'year',
	            	'number_of_colleges_participated',
	            	'registered_participants',
	            	'trained_participants',
			      	'level_1',
			      	'level_2',
			      	'level_3',
			      	'level_4',
			  	];
			}     	

        	$data = InitiativeStat::where(['initiative' => $initiative])->orderBy('year','desc')->get($get);

	        return response()->json([
	            'KPI' => 'Engagement level',
	            'Category' => 'Operational',
	            'frequency' => 'Annually',
	            'description' => '',
	            'data' => $data,
	        ]);
        } else {
        	$data = InitiativeStat::distinct()->get(['initiative']);

        	return response()->json([
        		'message' => 'Given Initiative is not exist',
        		'available_initiative' => $data,
        	], 404);
        }       

    }
}
