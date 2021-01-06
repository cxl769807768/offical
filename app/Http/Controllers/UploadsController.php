<?php

namespace App\Http\Controllers;

use App\Handlers\FileUploadHandler;
use Illuminate\Http\Request;

class UploadsController extends Controller
{
    public function uploadFile(Request $request,FileUploadHandler $uploader)
    {

        $file  = $request->upload_file;
        if ($file->isValid()) {
            $result = $uploader->save($file, 'web', 'job');

            return response()->json([
                'code'=>$result['code'],
                'msg'=>"获取成功",
                'data'=>$result['data']
            ]);
        }
    }

}
