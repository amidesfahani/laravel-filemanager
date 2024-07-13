<?php

namespace AmidEsfahani\LaravelFilemanager\Handlers;

class ConfigHandler
{
    public function userField()
    {
        return auth()->id();
    }
}
