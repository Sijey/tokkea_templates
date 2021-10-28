<mjml>
    <mj-head>
        <mj-include path="./base/baseHead.blade.php" />
    </mj-head>
    <mj-body background-color="#1E1F27" width="520px">
        <mj-include path="./base/baseHeader.blade.php" />

        <mj-wrapper css-class="content-wrap">
            <mj-section css-class="content">
                <mj-group>
                    <mj-column vertical-align="middle">
                        <mj-text css-class="content-title">
                            <span>Password Reset Request</span>
                        </mj-text>
                        <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
                        <mj-text css-class="content-text">
                            You have received this email because we've got a request for the password reset for your account.
                        </mj-text>
                        <mj-spacer height="20px" />
                        <mj-text css-class="button" align="left"
                        >
                            <a href="{{ $link }}">
                                Reset password
                            </a>
                        </mj-text>
                        <mj-spacer height="20px" />
                        <mj-text css-class="content-text">
                            If you did not request a password reset, no further action is required.
                        </mj-text>
                        <mj-spacer height="20px" />
                        <mj-text css-class="content-text">
                            If you face any issues clicking the "Reset Password" button, copy and paste the URL below
                            into your web browser
                            <a style="color: #479D7E;" href="#" target="_blank">
                                https://token=dc1fa302cc44e11dad67a577454ae 7065055d12610c374e62330e629934c274
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
