<?php

namespace koreansite\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
  public function index(Request $request) {

    $search_query = $request->input('search');


    $companies = DB::table('company_agg')
                    ->select('companyid', 'companyImage', 'companyTitle', 'stars', 'reviews as review_count', 'pros', 'cons')
                    ->whereRaw(' Soundex(?) = Soundex(company_agg.companyTitle)', [$search_query])
                    ->get();


    return view('company.index', ['companies' => $companies, 'search_query'=>$search_query]);

    }

  public function show($id) {

    $company = DB::table('company_agg')
                    ->select('companyid', 'companyImage', 'companyTitle', 'stars', 'wage', 'reviews', 'pros', 'cons')
                    ->where('companyid', '=', $id)
                    ->first();

    $reviews =  DB::table('company_reviews')
                        ->select('companyreviewStars', 'companyreviewPros', 'companyreviewCons', 'companyreviewComment', 'companyreviewWage')
                        ->where('companyid', '=', $id)
                        ->get();


    return view('company.show', ['reviews'=> $reviews, 'company'=>$company]);

  }


  public function create() {

    return view('company.create');
  }

  public function createreview($id) {
    $companyTitle = DB::table('companies')->select('companyTitle')->where('companyid', '=', $id)->first();
    return view('company.createreview', ['id' => $id, 'companyTitle' => $companyTitle]);


  }

  public function store(Request $request)  {


     $companyTitle = $request->input('companyTitle');
    if (DB::table('companies')->where('companyTitle', $companyTitle)->doesntexist()) {
        DB::table('companies')->insert([
          'companyTitle' => $companyTitle
          ]);
    }

    $companyid = DB::table('companies')->select('companyid')->where('companyTitle', $companyTitle)->value('companyid');
    $companyreviewPros = $request->input('companyreviewPros');
    $companyreviewCons = $request->input('companyreviewCons');
    $companyreviewComment = $request->input('companyreviewComment');
    $companyreviewStars = $request->input('companyreviewStars');
    $companyreviewWage = $request->input('companyreviewWage');


    DB::table('company_reviews')->insert(
      ['companyid' => $companyid, 'companyreviewPros' => $companyreviewPros, 'companyreviewCons' => $companyreviewCons,
      'companyreviewComment' => $companyreviewComment, 'companyreviewStars' => $companyreviewStars,'companyreviewWage' => $companyreviewWage]);

      return redirect()->route('company.thanks');

  }

  public function thanks() {

    return view('company.thanks');
  }




}
