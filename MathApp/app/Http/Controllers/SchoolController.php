<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use PhpOffice\PhpSpreadsheet\IOFactory;

class SchoolController extends Controller
{
    // Show the upload form
   // In your controller method
// In your controller method
public function showUploadForm()
{
    return view('schools.upload', [
        'activePage' => 'schools',
        'activeButton' => 'laravel',
        'navName' => 'Upload' // Define and pass the $navName variable
    ]);
}

    

    // Handle file upload and process
    public function upload(Request $request)
    {
        // Validate the file
        $request->validate([
            'file' => 'required|mimes:xlsx,csv|max:2048',
        ]);

        // Load the file
        $file = $request->file('file');
        $spreadsheet = IOFactory::load($file->getRealPath());
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();

        // Assuming the first row contains headers
        $header = array_shift($rows);

        foreach ($rows as $row) {
            $data = array_combine($header, $row);

            // Insert or update the school record
            School::updateOrCreate(
                ['school_id' => $data['school_id']], // Assuming school_id is unique
                [
                    'school_regno' => $data['school_regno'],
                    'district' => $data['district'],
                    'name' => $data['name'],
                    'representative_name' => $data['representative_name'],
                    'representative_email' => $data['representative_email'],
                ]
            );
        }

        return redirect()->route('schools.upload')->with('success', 'Schools imported successfully.');
    }
}
