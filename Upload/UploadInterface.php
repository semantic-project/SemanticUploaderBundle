<?php
/**
 * Created by PhpStorm.
 * User: N
 * Date: 09/04/2018
 * Time: 18:09
 */

namespace Semantic\UploaderBundle\Upload;


use Symfony\Component\HttpFoundation\File\UploadedFile;

interface UploadInterface {

	public function upload(UploadedFile $file): void;
}