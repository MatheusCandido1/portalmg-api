<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Portal MG API",
     *      description="This is a sample server of PortalMG server.",
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="Demo API Server"
     * )

     *
     * @OA\Tag(
     *     name="Cores",
     * )
     *
     * @OA\Tag(
     *     name="Junior Enterprises",
     * )
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
