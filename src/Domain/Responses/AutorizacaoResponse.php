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
    /** @var Retorno */
    private $retorno;
    /** @var mixed|null */
    private $codigo_autorizacao;
    /** @var mixed|null */
    private $referencia;
    /** @var mixed|null */
    private $transacao_id;
    /** @var int|null */
    private $sequencial;
    /** @var DateTime|null */
    private $data;
    /** @var float|null */
    private $valor;
    /** @var Cartao|null */
    private $cartao;

    /**
     * AutorizacaoResponse constructor.
     * @param Retorno $retorno
     * @param null $codigo_autorizacao
     * @param null $referencia
     * @param null $transacao_id
     * @param int|null $sequencial
     * @param DateTime|null $data
     * @param float|null $valor
     * @param Cartao|null $cartao
     */
    public function __construct(
        Retorno $retorno,
        ?$codigo_autorizacao = null,
        ?$referencia = null,
        ?$transacao_id = null,
        ?int $sequencial = null,
        ?DateTime $data = null,
        ?float $valor = null,
        ?Cartao $cartao = null
    ) {
        $this->retorno = $retorno;
        $this->codigo_autorizacao = $codigo_autorizacao;
        $this->referencia = $referencia;
        $this->transacao_id = $transacao_id;
        $this->sequencial = $sequencial;
        $this->data = $data;
        $this->valor = $valor;
        $this->cartao = $cartao;
    }

    /**
     * @return Retorno
     */
    public function getRetorno(): Retorno
    {
        return $this->retorno;
    }

    /**
     * @return mixed|null
     */
    public function getCodigoAutorizacao(): ?mixed
    {
        return $this->codigo_autorizacao;
    }

    /**
     * @return mixed|null
     */
    public function getReferencia(): ?mixed
    {
        return $this->referencia;
    }

    /**
     * @return mixed|null
     */
    public function getTransacaoId(): ?mixed
    {
        return $this->transacao_id;
    }

    /**
     * @return int|null
     */
    public function getSequencial(): ?int
    {
        return $this->sequencial;
    }

    /**
     * @return DateTime|null
     */
    public function getData(): ?DateTime
    {
        return $this->data;
    }

    /**
     * @return float|null
     */
    public function getValor(): ?float
    {
        return $this->valor;
    }

    /**
     * @return Cartao|null
     */
    public function getCartao(): ?Cartao
    {
        return $this->cartao;
    }
}