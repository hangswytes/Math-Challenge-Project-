<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\Log;

class QuestionController extends Controller
{
    /**
     * Display the upload form.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('questions.upload', [
            'navName' => 'Questions/Answers',
            'activePage' => 'questions',
            'activeButton' => 'upload'
        ]);
    }

    /**
     * Handle the file upload and import.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function upload(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'questions_file' => 'required|file|max:2048|mimes:xlsx,xls',
            'answers_file'   => 'required|file|max:2048|mimes:xlsx,xls',
        ]);
    
        try {
            // Retrieve the uploaded files
            $questionsFile = $request->file('questions_file');
            $answersFile = $request->file('answers_file');
    
            // Define the import classes inline
            $questionsImport = new class implements ToModel
            {
                public function model(array $row)
                {
                    // Make sure to adjust column mappings as per your Excel file structure
                    return new Question([
                        'column1' => $row[0], // Adjust as needed
                        'column2' => $row[1],
                        // Add more columns based on your Excel structure
                    ]);
                }
            };

            $answersImport = new class implements ToModel
            {
                public function model(array $row)
                {
                    // Make sure to adjust column mappings as per your Excel file structure
                    return new Answer([
                        'column1' => $row[0], // Adjust as needed
                        'column2' => $row[1],
                        // Add more columns based on your Excel structure
                    ]);
                }
            };
    
            // Import the data from the files
            Excel::import($questionsImport, $questionsFile);
            Excel::import($answersImport, $answersFile);
    
            // Redirect with success message
            return redirect()->route('questions.index')->with('success', 'Questions and Answers imported successfully.');
        } catch (\Exception $e) {
            // Log the error and redirect with an error message
            Log::error('Import error: ' . $e->getMessage());
            return redirect()->route('questions.index')->with('error', 'Failed to import data. Please try again.');
        }
    }
}
