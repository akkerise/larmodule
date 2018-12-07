<?php
namespace App\Modules\Frontend\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller{
    public function __construct(){
        # parent::__construct();
    }
    public function index(Request $request){
        return view('Frontend::index');
    }
}
