
    <div id="overlay"></div>

    <section id="contact-form">
        <div class="contact-form">
            <div class="form-heading">
                <h4>KONTAKTUJTE NÁS</h4>
            </div>

            <div class="form-wrapper">
                <form action="send.php" id="form" method="post" accept-charset="utf-8">
                    <input id="_token" type="hidden" name="token" value="" />
                    <div class="form-group">
                        <label for="name">Jméno</label>
                        <input name="name" class="form-control" data-validation="length"
                               data-validation-length="min1" type="text" id="name"
                               data-validation-error-msg="Tato položka je povinná" data-validation-allowing=" ">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="email" class="form-control" data-validation="email" type="email" id="email" data-validation-error-msg="E-mail je nesprávný">
                    </div>
                    <div class="form-group">
                        <label for="text">Zpráva</label>
                        <textarea name="message" class="form-control" cols="30" rows="6" id="text" data-validation="length" data-validation-length="min1" type="text" id="name" data-validation-error-msg="Tato položka je povinná"></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn-kontakt" type="submit" value="Odeslat">
                    </div>
                </form>

                <div class="form-success">
                    <h3>Zpráva byla odeslána. Děkujeme.</h3>
                </div>
            </div>

        </div>
    </section>
