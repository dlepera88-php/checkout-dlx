<?php
/**
 * MIT License
 *
 * Copyright (c) 2018 PHP DLX
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace CheckoutDLX\Domain\Responses;


use CheckoutDLX\Domain\Responses\ValueObjects\Retorno;
use DateTime;

class CapturaResponse
{
    /** @var mixed */
    private $referencia;
    /** @var mixed */
    private $transacao_id;
    /** @var mixed */
    private $sequencial;
    /** @var DateTime */
    private $dataCaptura;
    /** @var Retorno */
    private $retorno;

    /**
     * CapturaResponse constructor.
     * @param mixed $referencia
     * @param mixed $transacao_id
     * @param mixed $sequencial
     * @param DateTime $dataCaptura
     * @param Retorno $retorno
     */
    public function __construct($referencia, $transacao_id, $sequencial, DateTime $dataCaptura, Retorno $retorno)
    {
        $this->referencia = $referencia;
        $this->transacao_id = $transacao_id;
        $this->sequencial = $sequencial;
        $this->dataCaptura = $dataCaptura;
        $this->retorno = $retorno;
    }

    /**
     * @return mixed
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * @return mixed
     */
    public function getTransacaoId()
    {
        return $this->transacao_id;
    }

    /**
     * @return mixed
     */
    public function getSequencial()
    {
        return $this->sequencial;
    }

    /**
     * @return DateTime
     */
    public function getDataCaptura(): DateTime
    {
        return $this->dataCaptura;
    }

    /**
     * @return Retorno
     */
    public function getRetorno(): Retorno
    {
        return $this->retorno;
    }
}