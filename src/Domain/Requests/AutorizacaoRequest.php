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

namespace CheckoutDLX\Domain\Requests;


use CheckoutDLX\Domain\Requests\ValueObjects\Cartao;

class AutorizacaoRequest
{
    /** @var string|null */
    private $descricaoFatura;
    /** @var bool */
    private $capturaAutomatica = false;
    /** @var string */
    private $tipoTransacao = 'credit';
    /** @var mixed */
    private $referencia;
    /** @var float */
    private $valor;
    /** @var int */
    private $parcelas = 1;
    /** @var bool */
    private $recorrente = false;
    /** @var Cartao */
    private $cartao;

    /**
     * Autorizacao constructor.
     * @param bool $capturaAutomatica
     * @param string $tipoTransacao
     * @param mixed $referencia
     * @param float $valor
     * @param int $parcelas
     * @param Cartao $cartao
     */
    public function __construct(bool $capturaAutomatica, string $tipoTransacao, $referencia, float $valor, int $parcelas, Cartao $cartao)
    {
        $this->capturaAutomatica = $capturaAutomatica;
        $this->tipoTransacao = $tipoTransacao;
        $this->referencia = $referencia;
        $this->valor = $valor;
        $this->parcelas = $parcelas;
        $this->cartao = $cartao;
    }

    /**
     * @return string|null
     */
    public function getDescricaoFatura()
    {
        return $this->descricaoFatura;
    }

    /**
     * @param string|null $descricaoFatura
     */
    public function setDescricaoFatura($descricaoFatura)
    {
        $this->descricaoFatura = $descricaoFatura;
    }

    /**
     * @return bool
     */
    public function isCapturaAutomatica()
    {
        return $this->capturaAutomatica;
    }

    /**
     * @param bool $capturaAutomatica
     */
    public function setCapturaAutomatica($capturaAutomatica)
    {
        $this->capturaAutomatica = $capturaAutomatica;
    }

    /**
     * @return string
     */
    public function getTipoTransacao()
    {
        return $this->tipoTransacao;
    }

    /**
     * @return mixed
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @return int
     */
    public function getParcelas()
    {
        return $this->parcelas;
    }

    /**
     * @return bool
     */
    public function isRecorrente()
    {
        return $this->recorrente;
    }

    /**
     * @param bool $recorrente
     */
    public function setRecorrente($recorrente)
    {
        $this->recorrente = $recorrente;
    }

    /**
     * @return Cartao
     */
    public function getCartao()
    {
        return $this->cartao;
    }
}