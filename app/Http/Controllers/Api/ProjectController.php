<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with('technologies', 'type')->paginate(10);
        return response()->json($projects);
    }

    public function getTechnologies(){
        $technologies = Technology::all();
        return response()->json($technologies);
    }

    public function getTypes(){
        $types = Type::all();
        return response()->json($types);
    }

}
