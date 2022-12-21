<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserStoreRequest;
use App\Services\User\UserServiceInterface;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct(private UserServiceInterface $userService)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $users = $this->userService->getAll();

            return response()->json([
                'message' => 'ok',
                'data' => $users,
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => 'error',
                'data' => $exception->getMessage(),
            ], $exception->getCode());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(UserStoreRequest $request)
    {
        $attributes = $request->validated();
        try {
            $this->userService->create($attributes);
            return response()->json([
                'message' => 'Usuário cadastrado com sucesso',
            ], 201);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => 'Erro ao cadastrar usuário',
                'data' => $exception->getMessage(),
            ], $exception->getCode());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
