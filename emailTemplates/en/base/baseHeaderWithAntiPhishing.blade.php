<mj-section css-class="header">
    <mj-group>
        <mj-column>
            <mj-image align="left" width="150px" src="{{ asset('img/logo.png') }}"></mj-image>
        </mj-column>
        <mj-column>
            <mj-text align="right" css-class="header-name">
                CRYPTO TRADING <br /> SOLUTIONS MARKETPLACE
            </mj-text>
        </mj-column>
    </mj-group>
</mj-section>
<mj-section css-class="phishing-content">
    <mj-column>
        <mj-text css-class="phishing-text">
            {{empty($user) === false && $user->getSetting()->getAntiPhishingCode() ? "Anti-Phishing:" : "" }}
            <span style="color: #FFFFFF">
                {{empty($user) === false && $user->getSetting()->getAntiPhishingCode() ? $user->getSetting()->getAntiPhishingCode() : "" }}
            </span>
        </mj-text>
    </mj-column>
</mj-section>
