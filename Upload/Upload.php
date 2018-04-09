<?php

namespace Semantic\UploaderBundle\Upload;


use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Upload implements UploadInterface {

	/**
	 * @var string
	 */
	private $targetDir;

	public function __construct($targetDir)
	{
		$this->targetDir = $targetDir;
	}


	public function getTargetDir(): ?string {
		return $this->targetDir;
	}

	public function upload( UploadedFile $file ): void {

		if (!$file->isValid()) {
			throw new Exception('Passed file object is not valid');
		}

		$fileName =  md5($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
		$file->move($this->targetDir, $fileName);
	}


}