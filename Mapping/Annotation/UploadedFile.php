<?php

namespace Semantic\UploaderBundle\Mapping\Annotation;

use Symfony\Component\HttpFoundation\File\File;


/**
 * Class UploadedFile
 * @package Semantic\UploaderBundle\Mapping\Annotation
 * @Annotation
 * @Target({"PROPERTY"})
 */
class UploadedFile extends File {

}