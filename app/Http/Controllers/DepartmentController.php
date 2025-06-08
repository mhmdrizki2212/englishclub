<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function showCoreComittee()
    {
        return view('core_comittee');  // Pastikan file inti.blade.php ada di resources/views
    }

    public function showAcademicDepartment()
    {
        return view('academic_department');  // Pastikan file academic_department.blade.php ada di resources/views
    }

    public function showArtDepartment()
    {
        return view('art_department');  // Pastikan file art_department.blade.php ada di resources/views
    }

    public function showMediaInformation()
    {
        return view('media_information');  // Pastikan file media_information.blade.php ada di resources/views
    }

    public function showPublicRelations()
    {
        return view('public_relations');  // Pastikan file public_relations.blade.php ada di resources/views
    }
}
