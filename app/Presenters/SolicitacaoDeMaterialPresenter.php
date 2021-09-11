<?php

namespace App\Presenters;

use App\Transformers\SolicitacaoDeMaterialTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class SolicitacaoDeMaterialPresenter.
 *
 * @package namespace App\Presenters;
 */
class SolicitacaoDeMaterialPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SolicitacaoDeMaterialTransformer();
    }
}
