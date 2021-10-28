<?php /** @var \App\Doctrine\Entity\TransactionHistory $transactionHistory */ ?>
<mjml>
    <mj-head>
        <title>Подтверждение вывода средств {{$transactionHistory->getCurrency()->getName()}}</title>
        <mj-include path="./base/baseHead.blade.php" />
    </mj-head>
    <mj-body background-color="#1E1F27" width="520px">
        <mj-include path="./base/baseHeader.blade.php" />

        <mj-wrapper css-class="content-wrap">
            <mj-section css-class="content">
                <mj-group>
                    <mj-column vertical-align="middle">
                        <mj-text css-class="content-title">
                            <span>Запрос на вывод средств</span>
                        </mj-text>
                        <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
                        <mj-text css-class="content-text">
                            Подтвердите запрос на вывод средств:
                            <br /><br />
                            Сумма: <span style="font-weight: 700">100 USDT</span>
                            <br />
                            Адрес: <span style="font-weight: 700">{{$transactionHistory->getTransactionAddress()}}</span>
                            <br /><br />
                            Пожалуйста, внимательно проверьте адрес и подтвердите вывод, перейдя по ссылке.
                            Ссылка будет активна в течении 24 часов.
                            <br /><br />
                        </mj-text>
                        <mj-text align="left" css-class="button">
                            <a
                                href="{{ route('spa.confirm.withdraw', ['lang' => null,'confirmCode' => $transactionHistory->getWithdrawConfirmationCode()]) }}"
                            >
                                Подтвердить вывод средств
                            </a>
                        </mj-text>
                        <mj-spacer height="20px" />
                        <mj-text css-class="content-text">
                            Если вы не инициировали этот вывод, немедленно обратитесь по адресу <a href="mailto:support@tokkea.exchange" style="color: #479D7E;">
                                support@tokkea.io
                            </a>
                        </mj-text>
                        <mj-spacer height="20px" />
                        <mj-include path="./base/baseBottom.blade.php" />
                    </mj-column>
                </mj-group>
            </mj-section>
        </mj-wrapper>

        <mj-include path="./base/baseFooter.blade.php" />
    </mj-body>
</mjml>
