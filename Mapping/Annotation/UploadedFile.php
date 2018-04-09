<?php
/**
 * Created by PhpStorm.
 * User: N
 * Date: 09/04/2018
 * Time: 17:45
 */

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