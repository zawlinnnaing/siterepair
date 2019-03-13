<?php
/**
 * Created by PhpStorm.
 * User: zhiyu1205
 * Date: 2019-03-10
 * Time: 20:54
 */

namespace App\General;


use File;

trait Common
{
    /**
     * @param $file
     * @param $directoryName
     * @param null $imageName
     * @return array|string
     */
    public function uploadImage($file, $directoryName, $imageName = null)
    {
        if (empty($imageName)) {
            $fileName = $file->getClientOriginName();
        } else {
            $fileName = strtolower($imageName);
//            4663t`7ry
            $fileName = time() . '_' . $fileName . '.jpg';
        }
        $directory = public_path() . '/uploads/' . $directoryName;
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $path = $directory . '/' . $fileName;

        File::put($path, $file);
        return $fileName;
    }

    /**
     * @param $encodedString
     * @return bool|string
     */
    public function decodeImage($encodedString)
    {
        $base64Image = explode(',', $encodedString);
        $image = base64_decode($base64Image[1]);
        return $image;
    }
}