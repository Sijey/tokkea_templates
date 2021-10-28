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
                            <span>Запрос на сброс пароля</span>
                        </mj-text>
                        <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
                        <mj-text css-class="content-text">
                            Мы получили от Вас запрос на изменения пароля для вашей учетной записи
                        </mj-text>
                        <mj-spacer height="20px" />
                        <mj-text css-class="content-text">
                            Укажите новый пароль, перейдя по ссылке. Ссылка будет активна в течении 24 часов.
                        </mj-text>
                        <mj-spacer height="20px" />
                        <mj-text css-class="button" align="left"
                        >
                            <a href="{{ $link }}">
                                Сбросить пароль
                            </a>
                        </mj-text>
                        <mj-spacer height="20px" />
                        <mj-text css-class="content-text">
                            Если вы не запрашивали сброс пароля, никаких дальнейших действий не требуется.
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
