<?php

namespace App\Http\Controllers;

use App\Traits\FindsModelsOrFails;
use App\Traits\HttpResponses;

abstract class Controller
{
    use HttpResponses, FindsModelsOrFails;
}
