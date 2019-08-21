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

class ConsultaResponse
{
    /** @var AutorizacaoResponse */
    private $autorizacao;
    /** @var CapturaResponse */
    private $captura;
    /** @var Cartao */
    private $cartao;

    /**
     * ConsultaResponse constructor.
     * @param AutorizacaoResponse $autorizacao
     * @param CapturaResponse $captura
     * @param Cartao $cartao
     */
    public function __construct(AutorizacaoResponse $autorizacao, CapturaResponse $captura, Cartao $cartao)
    {
        $this->autorizacao = $autorizacao;
        $this->captura = $captura;
        $this->cartao = $cartao;
    }

    /**
     * @return AutorizacaoResponse
     */
    public function getAutorizacao(): AutorizacaoResponse
    {
        return $this->autorizacao;
    }

    /**
     * @return CapturaResponse
     */
    public function getCaptura(): CapturaResponse
    {
        return $this->captura;
    }

    /**
     * @return Cartao
     */
    public function getCartao(): Cartao
    {
        return $this->cartao;
    }
}