<?php /** @var \App\Doctrine\Entity\TransactionHistory $transactionHistory */ ?>

<mjml>
    <mj-head>
        <title>Подтверждение депозита</title>
        <mj-include path="./base/baseHead.blade.php" />
    </mj-head>
    <mj-body background-color="#1E1F27" width="520px">
        <mj-include path="./base/baseHeader.blade.php" />

        <mj-wrapper css-class="content-wrap">
            <mj-section css-class="content">
                <mj-group>
                    <mj-column vertical-align="middle">
                        <mj-text css-class="content-title">
                            <span>Подтверждение депозита</span>
                        </mj-text>
                        <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
                        <mj-text css-class="content-text">
                            На ваш аккаунт было:
                            <br /><br />
                            отправлено: <span style="font-weight: 700">100 USDT</span>
                            <br />
                            зачислено: <span style="font-weight: 700">2000 TKA</span>
                            <br /> <br />
                        </mj-text>
                        <mj-include path="./base/baseBottom.blade.php" />
                    </mj-column>
                </mj-group>
            </mj-section>
        </mj-wrapper>

        <mj-include path="./base/baseFooter.blade.php" />
    </mj-body>
</mjml>
