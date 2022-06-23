<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function blogImageUpload(Request $request)
    {
        $file = $request->file('file');
        
        $fileupload = json_decode(fileUpload($file,'images/blogpost/content', 'default', $type="Image"), true);
        $filestatus = $fileupload['status'];
        $filename = $fileupload['filename'];
        $filepath = $fileupload['path'];
        $location = $fileupload['location'];

        return $fileupload;
    }

    public function deleteFromDB(Request $request)
    {
        $user = Auth::user();
        $id = $request->id;
        $table_name = $request->tblname;

        DB::table($table_name)->where('id', $id)->delete();
        return 'success';
    }
}
