<?php

namespace AmidEsfahani\LaravelFilemanager\Exceptions;

class DuplicateFileNameException extends \Exception
{
    public function __construct()
    {
        $this->message = trans('laravel-filemanager::lfm.error-file-exist');
    }
}
