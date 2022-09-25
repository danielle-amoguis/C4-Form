<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class FormController extends Controller
{
    const EXCEL_FILENAME = 'form_records';
    const EXCEL_EXT = 'xlsx';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function upload()
    {
   
    }

    public function send()
    {
      
    }

    public function renderPDF()
    {        
        $latestForm = Form::get()->last();
        $answers = json_decode($latestForm->answers, true);

        $pdf = App::make('snappy.pdf.wrapper');
        $pdf->loadview('forms.pdf', compact('answers'));

        return $pdf->stream('forms.pdf.pdf');
    }

    public function downloadExcel()
    {
        $fileName = self::EXCEL_FILENAME.'.'.self::EXCEL_EXT;

        $fileExists = Storage::disk('export')->exists($fileName);

        if (!$fileExists) {
            return 'No records stored yet.';
        } else {
            $formRecords = Excel::load(
                storage_path('exports').DIRECTORY_SEPARATOR.$fileName
            );
        }
        $formRecords->download('xlsx');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $newForm = new Form();
        $answers = [
            '34-a-answer' => $data['34-a-answer'] ?? null,
            '34-b-answer' => $data['34-b-answer'] ?? null,
            '34-b-answer-details' => $data['34-b-answer-details'] ?? null,
            '35-a-answer' => $data['35-a-answer'] ?? null,
            '35-a-answer-details' => $data['35-a-answer-details'] ?? null,
            '35-b-answer' => $data['35-b-answer'] ?? null,
            '35-b-answer-date' => $data['35-b-answer-date'] ?? null,
            '35-b-answer-case' => $data['35-b-answer-case'] ?? null,
            '36-answer' => $data['36-answer'] ?? null,
            '36-answer-details' => $data['36-answer-details'] ?? null,
            '37-answer' => $data['37-answer'] ?? null,
            '37-answer-details' => $data['37-answer-details'] ?? null,
            '38-a-answer' => $data['38-a-answer'] ?? null,
            '38-a-answer-details' => $data['38-a-answer-details'] ?? null,
            '38-b-answer' => $data['38-b-answer'] ?? null,
            '38-b-answer-details' => $data['38-b-answer-details'] ?? null,
            '39-answer' => $data['39-answer'] ?? null,
            '39-answer-details' => $data['39-answer-details'] ?? null,
            '40-a-answer' => $data['40-a-answer'] ?? null,
            '40-a-answer-details' => $data['40-a-answer-details'] ?? null,
            '40-b-answer' => $data['40-b-answer'] ?? null,
            '40-b-answer-details' => $data['40-b-answer-details'] ?? null,
            '40-c-answer' => $data['40-c-answer'] ?? null,
            '40-c-answer-details' => $data['40-c-answer-details'] ?? null,
            '41-answer-name' => $data['41-answer-name'] ?? null,
            '41-answer-address' => $data['41-answer-address'] ?? null,
            '41-answer-contact-no' => $data['41-answer-contact-no'] ?? null,
            '42-answer-gov-id' => $data['42-answer-gov-id'] ?? null,
            '42-answer-valid-id-no' => $data['42-answer-valid-id-no'] ?? null,
            '42-answer-issuance-details' => $data['42-answer-issuance-details'] ?? null,
        ];
        $newForm->answers = json_encode($answers);
        $newForm->save();

        $sheetData = [];
        $fileName = self::EXCEL_FILENAME.'.'.self::EXCEL_EXT;
        $fileExists = Storage::disk('export')->exists($fileName);

        if (!$fileExists) {
            Excel::create(self::EXCEL_FILENAME, function($excel) {
                $excel->sheet('Sheet 1');
            })->store(self::EXCEL_EXT);

            $headerData = [
                'Form ID', 
                '34.a Answer', 
                '34.b Answer',
                '34.b Answer Details',
                '35.a Answer',
                '35.a Answer Details',
                '35.b Answer',
                '35.b Date Filed',
                '35.b Status of Case(s)',
                '36. Answer',
                '36. Answer Details',
                '37. Answer',
                '37. Answer Details',
                '38.a Answer',
                '38.a Answer Details',
                '38.b Answer',
                '38.b Answer Details',
                '39 Answer',
                '39 Answer Details',
                '40.a Answer',
                '40.a Answer Details',
                '40.b Answer',
                '40.b Answer Details',
                '40.c Answer',
                '40.c Answer Details',
                '41. Name',
                '41. Address',
                '41. Tel. No.',
                '42. Government Issued ID',
                '42. ID/License/Passport No.',
                '42. Date/Place of Issuance'
            ];
            $sheetData[] = $headerData;
        }
        $rowData = [];
        $rowData[] = $newForm->id;

        foreach ($answers as $answer) {
            $rowData[] = $answer ?? '';
        }
        $sheetData[] = $rowData;

        Excel::load(
            storage_path('exports').DIRECTORY_SEPARATOR.$fileName,
            function ($excel) use ($sheetData) {
                $excel->sheet('Sheet 1', function($sheet) use ($sheetData) {
                    $sheet->rows($sheetData);
                });
            }
        )->store(self::EXCEL_EXT);

        return redirect()->route('render-pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    public function pdf()
    {
        $latestForm = Form::orderBy('id', 'DESC')->first();

        $answers = json_decode($latestForm->answers);

        return view('forms.pdf', compact('answers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
