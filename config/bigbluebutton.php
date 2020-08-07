<?php

return [

    'testserver' => json_decode(env('TESTING_BBB','[]')),
    'max_filesize' => env('BBB_MAX_FILESIZE','30')*1000,
    'allowed_file_mimes' => env('BBB_ALLOWED_FILE_MIMES','pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,odt,ods,odp,odg,odc,odi,jpg,jpeg,png'),
];
