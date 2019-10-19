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

namespace CheckoutDLX\Domain\Services\Pagamento;


use CheckoutDLX\Domain\Requests\AutorizacaoRequest;
use CheckoutDLX\Domain\Requests\CancelamentoRequest;
use CheckoutDLX\Domain\Requests\CapturaRequest;
use CheckoutDLX\Domain\Requests\ConsultaRequest;
use CheckoutDLX\Domain\Responses\AutorizacaoResponse;
use CheckoutDLX\Domain\Responses\CancelamentoResponse;
use CheckoutDLX\Domain\Responses\CapturaResponse;
use CheckoutDLX\Domain\Responses\ConsultaResponse;

interface GatewayPagamentoInterface
{
    /**
     * Nome do serviço
     * @return string|null
     */
    public function getNomeServico(): ?string;

    /**
     * Enviar requisição de autorização para o gateway de pagamento.
     * @param AutorizacaoRequest $request
     * @return AutorizacaoResponse
     */
    public function autorizar(AutorizacaoRequest $request): AutorizacaoResponse;

    /**
     * Capturar uma determinada transação.
     * Essa opção será utilizada apenas se a autorização não for configurada como ˜captura automática˜.
     * @param CapturaRequest $request
     * @return CapturaResponse
     */
    public function capturar(CapturaRequest $request): CapturaResponse;

    /**
     * Consultar uma transação.
     * @param ConsultaRequest $request
     * @return ConsultaResponse
     */
    public function consultar(ConsultaRequest $request): ConsultaResponse;

    /**
     * Cancelar e gerar reembolso de uma determinada transação.
     * @param CancelamentoRequest $request
     * @return CancelamentoResponse
     */
    public function cancelar(CancelamentoRequest $request): CancelamentoResponse;
}