<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Core;

class CoreController extends Controller
{
    /**
     *
     * @OA\Get (
     *     path="/cores",
     *     tags={"Cores"},
     *     summary="Returns a list of cores.",
     *     @OA\Response(
     *      response=200,
     *      description="Successul Operation",
     *     )
     * )
     */
    function index() {
        try {
            $cores = Core::all();

            return response()->json(['data' => $cores], 200);

        } catch (\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }

    function store(Request $request) {
        try {
            $core = new Core;

            $core->name = $request->name;
            $core->logo = $request->logo;
            $core->save();

            return response()->json([
                'data' => [
                    'success_message' => 'Core created',
                ]
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }

    function show(Core $core) {
        try {
            return response()->json(['data' => $core],200);

        } catch (\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }

    function update(Request $request, Core $core) {
        try {

            $core->name = $request->name;
            $core->logo = $request->logo;
            $core->save();

            return response()->json([
                'data' => [
                    'success_message' => 'Core updated',
                ]
            ], 202);

        } catch (\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }

    function destroy(Core $core) {
        try {
            $core->delete();

            return response()->json([
                'data' => [
                    'success_message' => 'Core deleted',
                ]
            ], 202);
        } catch (\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }
}
