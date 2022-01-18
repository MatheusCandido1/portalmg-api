<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JuniorEnterprise;
use App\Models\Core;
use App\Http\Resources\JuniorEnterpriseResource;
use App\Http\Resources\JuniorEnterpriseCollection;

class JuniorEnterpriseController extends Controller
{
    function index() {
        try {
            return new JuniorEnterpriseCollection(JuniorEnterprise::with('core:id,name')->get());
            return response()->json($juniorEnteprises, 200);

        } catch (\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }

    function store(Request $request) {
        try {
            $juniorEnteprise = new JuniorEnterprise;

            $juniorEnteprise->name = $request->name;
            $juniorEnteprise->logo = $request->logo;

            $core = Core::find($request->core_id);
            $juniorEnteprise->core()->associate($core);

            $juniorEnteprise->save();

            return response()->json([
                'success_message' => 'Junior Enterprise created',
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }

    function show($id) {
        try {
            return new JuniorEnterpriseResource(JuniorEnterprise::with('core:id,name')->find($id));

        } catch (\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }

    function update(Request $request, $id) {
        try {
            $juniorEnterprise = JuniorEnterprise::with('core:id,name')->find($id);

            $juniorEnterprise->name = $request->name;
            $juniorEnterprise->logo = $request->logo;
            $juniorEnterprise->core_id = $request->core_id;
            $juniorEnterprise->save();

            return response()->json([
                'success_message' => 'Junior Enterprise updated',
            ], 202);

        } catch (\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }
}
