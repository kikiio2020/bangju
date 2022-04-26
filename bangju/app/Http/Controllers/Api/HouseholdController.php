<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Household;
use App\Models\User;
use App\Http\Resources\User as UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HouseholdController extends Controller
{
    /**
     * @param App\Models\Household
     * @return Collection<User>
     */
    public function getHouseholdMembers(Household $household) {

        return response(
            UserResource::collection(User::where('household_id', $household->id)->get()),
            Response::HTTP_OK
        );
    }
}
