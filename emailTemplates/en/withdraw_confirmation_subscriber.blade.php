<?php /** @var \App\Doctrine\Entity\TransactionHistory $transactionHistory */ ?>
<mjml>
    <mj-head>
        <title>Withdrawal Requested {{$transactionHistory->getCurrency()->getName()}}</title>
        <mj-include path="./base/baseHead.blade.php" />
    </mj-head>
    <mj-body background-color="#1E1F27" width="520px">
        <mj-include path="./base/baseHeader.blade.php" />

        <mj-wrapper css-class="content-wrap">
            <mj-section css-class="content">
                <mj-group>
                    <mj-column vertical-align="middle">
                        <mj-text css-class="content-title">
                            <span>Withdrawal Requested</span>
                        </mj-text>
                        <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
                        <mj-text css-class="content-text">
                            You have requested to withdrawal <span style="font-weight: 700">2000 TKA.</span>
                            <span style="font-weight: 700">10 ETH</span>
                            will be credited to the given address:
                            <br /><br />
                            Withdrawal address: <br /><span style="font-weight: 700">{{$transactionHistory->getTransactionAddress()}}</span>
                            <br /><br />
                            Please check the address thoroughly and confirm the withdrawal by clicking the button below.
                            <br /><br />
                        </mj-text>
                        <mj-text align="left" css-class="button">
                            <a
                                href="{{ route('spa.confirm.withdraw', ['lang' => null,'confirmCode' => $transactionHistory->getWithdrawConfirmationCode()]) }}"
                            >
                                Confirm withdrawl
                            </a>
                        </mj-text>
                        <mj-spacer height="20px" />
                        <mj-text css-class="content-text">
                            Alternatively, you can copy the link below to the address bar of your browser for confirmation.
                            <br /><a href="https://assets/withdraw?confirmCode=ba63bc84-1c0f-4012-a5bb-9e94e8042f17" style="color: #479D7E;">
                                https://assets/withdraw?confirmCode=ba63bc84-1c0f-4012-a5bb-9e94e8042f17
                        </a>
                        </mj-text>
                        <mj-spacer height="20px" />
                        <mj-text css-class="content-text">
                            If you didn't initiate this activity, please contact our support team at <a href="mailto:support@tokkea.exchange" style="color: #479D7E;">
                            support@tokkea.exchange
                        </a> or proceed to <a href="#" target="_blank" style="color: #479D7E;">tokkea/support</a>
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
