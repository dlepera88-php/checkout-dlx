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

namespace CheckoutDLX\Domain\Requests\ValueObjects;


class Cartao
{
    /** @var string */
    private $donoCartao;
    /** @var string */
    private $numeroCartao;
    /** @var int */
    private $expiracao_mes;
    /** @var int */
    private $expiracao_ano;
    /** @var string */
    private $codigo_seguranca;

    /**
     * Cartao constructor.
     * @param string $donoCartao
     * @param string $numeroCartao
     * @param int $expiracao_mes
     * @param int $expiracao_ano
     * @param string $codigo_seguranca
     */
    public function __construct(string $donoCartao, string $numeroCartao, int $expiracao_mes, int $expiracao_ano, string $codigo_seguranca)
    {
        $this->donoCartao = $donoCartao;
        $this->numeroCartao = $numeroCartao;
        $this->expiracao_mes = $expiracao_mes;
        $this->expiracao_ano = $expiracao_ano;
        $this->codigo_seguranca = $codigo_seguranca;
    }

    /**
     * @return string
     */
    public function getDonoCartao()
    {
        return $this->donoCartao;
    }

    /**
     * @return string
     */
    public function getNumeroCartao()
    {
        return $this->numeroCartao;
    }

    /**
     * @return int
     */
    public function getExpiracaoMes()
    {
        return $this->expiracao_mes;
    }

    /**
     * @return int
     */
    public function getExpiracaoAno()
    {
        return $this->expiracao_ano;
    }

    /**
     * @return string
     */
    public function getCodigoSeguranca()
    {
        return $this->codigo_seguranca;
    }
}