<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\SolicitacaoDeMaterial;

/**
 * Class SolicitacaoDeMaterialTransformer.
 *
 * @package namespace App\Transformers;
 */
class SolicitacaoDeMaterialTransformer extends TransformerAbstract
{
    /**
     * Transform the SolicitacaoDeMaterial entity.
     *
     * @param \App\Entities\SolicitacaoDeMaterial $model
     *
     * @return array
     */
    public function transform(SolicitacaoDeMaterial $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
