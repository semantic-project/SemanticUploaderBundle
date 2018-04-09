<?php

namespace Semantic\UploaderBundle\Upload;


use Symfony\Component\HttpFoundation\File\UploadedFile;

interface UploadInterface {

	public function upload(UploadedFile $file): void;
}