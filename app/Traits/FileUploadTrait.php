<?php

namespace App\Traits;

trait FileUploadTrait
{
    /**
     * Upload a file to a specific folder and optionally delete the old file.
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @param string $folder
     * @param string|null $existingFile
     * @return string|null
     */
    public function uploadFile($file, $folder, $existingFile = null)
    {
        if (!$file) {
            return $existingFile;
        }

        // Define the target directory
        $targetFolder = public_path('uploads/' . $folder);

        // Ensure the target directory exists
        if (!file_exists($targetFolder)) {
            mkdir($targetFolder, 0755, true);
        }

        // Delete the existing file if it exists
        if ($existingFile) {
            $existingFilePath = public_path(parse_url($existingFile, PHP_URL_PATH));
            if (file_exists($existingFilePath)) {
                unlink($existingFilePath);
            }
        }

        // Generate a unique file name
        $fileName = uniqid('', true) . '.' . $file->getClientOriginalExtension();

        // Move the file to the target directory
        $file->move($targetFolder, $fileName);

        // Return the public URL to the uploaded file
        return url('uploads/' . $folder . '/' . $fileName);
    }
}
