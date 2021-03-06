<?php

namespace Umbrella\Ya\RetornoBoleto\Cnab\Cnab400;

use Easy\Collections\VectorInterface;
use Umbrella\Ya\RetornoBoleto\Cnab\CnabHeaderInterface;

interface HeaderInterface extends CnabHeaderInterface
{

    public function getTipoOperacao();

    public function getIdTipoOperacao();

    public function getIdTipoServico();

    public function getTipoServico();

    public function getDataGravacao();

    public function getSequencialReg();

    /**
     * @return Header
     */
    public function setTipoOperacao($tipoOperacao);

    /**
     * @return Header
     */
    public function setIdTipoOperacao($idTipoOperacao);

    /**
     * @return Header
     */
    public function setIdTipoServico($idTipoServico);

    /**
     * @return Header
     */
    public function setTipoServico($tipoServico);

    /**
     * @return Header
     */
    public function setDataGravacao($dataGravacao);

    /**
     * @return Header
     */
    public function setSequencialReg($sequencialReg);

    /**
     * @return VectorInterface
     */
    public function getComplementos();

    /**
     * @return Header
     */
    public function setComplementos(VectorInterface $complementos);

    /**
     * @return Header
     */
    public function addComplemento($complemento);

    /**
     * @return Header
     */
    public function removeComplemento($complemento);
}
