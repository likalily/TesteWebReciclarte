<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SolicitacaoDeMaterialRepository;
use App\Entities\SolicitacaoDeMaterial;
use App\Validators\SolicitacaoDeMaterialValidator;

/**
 * Class SolicitacaoDeMaterialRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SolicitacaoDeMaterialRepositoryEloquent extends BaseRepository implements SolicitacaoDeMaterialRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SolicitacaoDeMaterial::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SolicitacaoDeMaterialValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
