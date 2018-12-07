<?php
namespace App\Modules\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller{
    public function __construct(){
        # parent::__construct();
    }
    public function index(Request $request){
        return view('Api::index');
    }
}
