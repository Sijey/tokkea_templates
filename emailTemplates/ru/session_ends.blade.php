<?php /** @var \App\Doctrine\Entity\TransactionHistory $transactionHistory */ ?>
<mjml>
    <mj-head>
        <title>Сессия завершена</title>
        <mj-include path="./base/baseHead.blade.php" />
    </mj-head>
    <mj-body background-color="#1E1F27" width="520px">
        <mj-include path="./base/baseHeader.blade.php" />

        <mj-wrapper css-class="content-wrap">
            <mj-section css-class="content">
                <mj-group>
                    <mj-column vertical-align="middle">
                        <mj-text css-class="content-title">
                            <span>Сессия завершена</span>
                        </mj-text>
                        <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
                        <mj-text css-class="content-text">
                            Сессия, на которую вы были подписаны завершена.
                            <br /><br />
                            Название: <span style="font-weight: 700">Название сессии</span>
                            <br />
                            Трейдер: <span style="font-weight: 700">Никнейм трейдера</span>
                            <br />
                            Биржа: <span style="font-weight: 700">Binance</span>
                            <br />
                            Торговые пары: <span style="font-weight: 700">BTC/USDT, ETH/USDT</span>
                            <br />
                            Время завершения: <span style="font-weight: 700">дата начала - <br />дата окончания</span>
                            <br /><br />
                        </mj-text>
                        <mj-text align="left" css-class="button">
                            <a
                                href="{{ route('spa.confirm.withdraw', ['lang' => null,'confirmCode' => $transactionHistory->getWithdrawConfirmationCode()]) }}"
                            >
                                Перейти к сессии
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
