<?php 
 
 $accepted_origins = array(url('/'));

 
 $rand = rand(11111, 99999); // Generate random file name
$path = $file->storeAs('public/images', $rand . '.' . $file->extension()); // Store file
$imageUrl = Storage::url($path); // Get the URL for the stored file

 
if ($request->hasFile('file')) {
    $file = $request->file('file');
    $rand = rand(11111, 99999);
    $path = $file->storeAs('public/images', $rand . '.' . $file->extension());
    $fileUrl = Storage::url($path);
    
    echo json_encode(['location' => $fileUrl]);
} else {
    header("HTTP/1.1 500 Server Error");
}

return response()->json(['error' => 'Upload failed'], 400);

if ($file->getSize() > 2048000) { // Limit size to 2MB
    return response()->json(['error' => 'File too large'], 400);
}

?>