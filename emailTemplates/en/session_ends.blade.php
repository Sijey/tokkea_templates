<?php /** @var \App\Doctrine\Entity\TransactionHistory $transactionHistory */ ?>
<mjml>
    <mj-head>
        <title>Session has completed</title>
        <mj-include path="./base/baseHead.blade.php" />
    </mj-head>
    <mj-body background-color="#1E1F27" width="520px">
        <mj-include path="./base/baseHeader.blade.php" />

        <mj-wrapper css-class="content-wrap">
            <mj-section css-class="content">
                <mj-group>
                    <mj-column vertical-align="middle">
                        <mj-text css-class="content-title">
                            <span>Session has completed</span>
                        </mj-text>
                        <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
                        <mj-text css-class="content-text">
                            The session you subscribed to has been completed
                            <br /><br />
                            Session Name: <span style="font-weight: 700">Session Name</span>
                            <br />
                            Trader: <span style="font-weight: 700">NameTrader</span>
                            <br />
                            Exchange: <span style="font-weight: 700">Binance</span>
                            <br />
                            Trading pairs: <span style="font-weight: 700">BTC/USDT, ETH/USDT</span>
                            <br />
                            Start Date-End Date: <span style="font-weight: 700">Start date - <br />End date</span>
                            <br /><br />
                        </mj-text>
                        <mj-text align="left" css-class="button">
                            <a
                                href="{{ route('spa.confirm.withdraw', ['lang' => null,'confirmCode' => $transactionHistory->getWithdrawConfirmationCode()]) }}"
                            >
                                Go to session
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
