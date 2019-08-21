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


use CheckoutDLX\Domain\Responses\ValueObjects\Cartao;
use CheckoutDLX\Domain\Responses\ValueObjects\Retorno;
use DateTime;

class AutorizacaoResponse
{
    /** @var mixed */
    private $codigo_autorizacao;
    /** @var mixed */
    private $referencia;
    /** @var mixed */
    private $transacao_id;
    /** @var int */
    private $sequencial;
    /** @var DateTime */
    private $data;
    /** @var float */
    private $valor;
    /** @var Cartao */
    private $cartao;
    /** @var Retorno */
    private $retorno;

    /**
     * Autorizacao constructor.
     * @param mixed $codigo_autorizacao
     * @param mixed $referencia
     * @param mixed $transacao_id
     * @param int $sequencial
     * @param DateTime $data
     * @param float $valor
     * @param Cartao $cartao
     * @param Retorno $retorno
     */
    public function __construct($codigo_autorizacao, $referencia, $transacao_id, int $sequencial, DateTime $data, float $valor, Cartao $cartao, Retorno $retorno)
    {
        $this->codigo_autorizacao = $codigo_autorizacao;
        $this->referencia = $referencia;
        $this->transacao_id = $transacao_id;
        $this->sequencial = $sequencial;
        $this->data = $data;
        $this->valor = $valor;
        $this->cartao = $cartao;
        $this->retorno = $retorno;
    }

    /**
     * @return mixed
     */
    public function getCodigoAutorizacao()
    {
        return $this->codigo_autorizacao;
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
     * @return int
     */
    public function getSequencial(): int
    {
        return $this->sequencial;
    }

    /**
     * @return DateTime
     */
    public function getData(): DateTime
    {
        return $this->data;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * @return Cartao
     */
    public function getCartao(): Cartao
    {
        return $this->cartao;
    }

    /**
     * @return Retorno
     */
    public function getRetorno(): Retorno
    {
        return $this->retorno;
    }
}