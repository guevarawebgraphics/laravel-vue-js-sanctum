<?php

namespace App\Http\Controllers\Api;

use App\Services\Users\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Services\Stores\Repositories\StoreRepositoryInterface;
use App\Services\Stores\Requests\addStoreRequest;
use App\Services\Stores\Requests\updateStoreRequest;
use Illuminate\Pagination\LengthAwarePaginator;
use Session;



class StoreController extends Controller
{

    function __construct(StoreRepositoryInterface $storeRepository
    )
    {
        $this->storeRepository = $storeRepository;
    }

    public function index(Request $request)
    {
        try {
            $current_page = !empty($request->page) ? $request->page : 1;
            $params = [];

            $data = $this->storeRepository->fetchStorePaginate($current_page, $params);

            // Check if there are items to paginate
            if ($data->total() > 0) {

                $paginator = new LengthAwarePaginator(
                    $data->items(),
                    $data->total(),
                    $data->perPage(),
                    $current_page,
                    ['path' => LengthAwarePaginator::resolveCurrentPath()]
                );

                return response()->json([
                    'status' => true,
                    'message' => 'Data Successfully retrieved!',
                    'data' => $data,
                    'paginator' => $paginator,
                ], 200);

            } else {
                // Handle the case where there are no items to paginate
                return response()->json([
                    'status' => true,
                    'message' => 'No data available.',
                    'data' => [],
                    'paginator' => null,
                ], 200);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
                'data' => null,
            ], 500);
        }
    }

    public function edit($id){
        try {

            $data = $this->storeRepository->fetchStore($id);

             return response()->json([
                'status' => true,
                'message' => 'Data Successfully retrieved!',
                'data' => $data
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
                'data'  =>  NULL
            ], 500);
        }
    }

    
    public function store(addStoreRequest $request) {
        try {

            $input = $request->all();
            $input['user_id'] = auth()->user()->id;
            $data = $this->storeRepository->addData($input);
                

            return response()->json([
                'status' => true,
                'message' => 'Data Successfully stored!',
                'data' => $data
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
                'data'  =>  NULL
            ], 500);
        }
    }

    public function update(updateStoreRequest $request, $id) {
        try {

            $input = $request->all();

            $data = $this->storeRepository->updateData($id, $input);
                

            return response()->json([
                'status' => true,
                'message' => 'Data Successfully updated!',
                'data' => $data
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
                'data'  =>  NULL
            ], 500);
        }
    }
}