<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\SolicitacaoDeMaterialCreateRequest;
use App\Http\Requests\SolicitacaoDeMaterialUpdateRequest;
use App\Repositories\SolicitacaoDeMaterialRepository;
use App\Validators\SolicitacaoDeMaterialValidator;

/**
 * Class SolicitacaoDeMaterialsController.
 *
 * @package namespace App\Http\Controllers;
 */
class SolicitacaoDeMaterialsController extends Controller
{
    /**
     * @var SolicitacaoDeMaterialRepository
     */
    protected $repository;

    /**
     * @var SolicitacaoDeMaterialValidator
     */
    protected $validator;

    /**
     * SolicitacaoDeMaterialsController constructor.
     *
     * @param SolicitacaoDeMaterialRepository $repository
     * @param SolicitacaoDeMaterialValidator $validator
     */
    public function __construct(SolicitacaoDeMaterialRepository $repository, SolicitacaoDeMaterialValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $solicitacaoDeMaterials = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $solicitacaoDeMaterials,
            ]);
        }

        return view('solicitacaoDeMaterials.index', compact('solicitacaoDeMaterials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SolicitacaoDeMaterialCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(SolicitacaoDeMaterialCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $solicitacaoDeMaterial = $this->repository->create($request->all());

            $response = [
                'message' => 'SolicitacaoDeMaterial created.',
                'data'    => $solicitacaoDeMaterial->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitacaoDeMaterial = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $solicitacaoDeMaterial,
            ]);
        }

        return view('solicitacaoDeMaterials.show', compact('solicitacaoDeMaterial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitacaoDeMaterial = $this->repository->find($id);

        return view('solicitacaoDeMaterials.edit', compact('solicitacaoDeMaterial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SolicitacaoDeMaterialUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(SolicitacaoDeMaterialUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $solicitacaoDeMaterial = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'SolicitacaoDeMaterial updated.',
                'data'    => $solicitacaoDeMaterial->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'SolicitacaoDeMaterial deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'SolicitacaoDeMaterial deleted.');
    }
}
