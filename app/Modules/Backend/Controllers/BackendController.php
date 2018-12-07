<?php
namespace App\Modules\Backend\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller{
    public function __construct(){
        # parent::__construct();
    }
    public function index(Request $request){
        return view('Backend::index');
    }
}
