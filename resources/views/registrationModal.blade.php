<div id = "myReg" class="modalReg modal" >
    <form method="POST" action="/make/reg" id="regFormId" >
        {{csrf_field()}}
        <div class="reg-content modal-content" autocomplete="off"  >
            <span class="closeReg" style="position: absolute; top: 0; right: 0; margin: 8px;">&times;</span>

            <p><h3 style="color: black;text-align: center">Registration</h3></p>

            <input id="username" name="username" placeholder="login" value=""  style="border: none;font-size: 18px; text-align: center; border-bottom: 2px black solid;padding: 10px"><br />
            <div id="usernameError"></div>
            <input id="email" name="emailReg"type="email" value=""  placeholder="email" style="margin-top: 10px;font-size: 18px; border: none;text-align: center; border-bottom: 2px black solid ;padding: 10px"><br />
            <div id="emailError"></div>
            <input id="numerTelef" name="numerTelef" value=""  placeholder="mobile number" style="margin-top: 10px;font-size: 18px; border: none;text-align: center; border-bottom: 2px black solid ;padding: 10px"><br />
            <div id="numerError"></div>
            <input id="pass1" name="passReg1"type="password" placeholder="password" style="margin-top: 10px;font-size: 18px; border: none;text-align: center; border-bottom: 2px black solid ;padding: 10px"><br />
            <div id="pass1Error"></div>
            <input id="pass2" name="passReg2"type="password" autocomplete="off"  placeholder="password again" style="margin-top: 10px;font-size: 18px; border: none;text-align: center; border-bottom: 2px black solid ;padding: 10px"><br />
            <div id="pass2Error"></div>



            <input class="subbutReg" type="button" value="Ready" name="submit2" onclick="registrationFun()" >

        </div>
    </form>
</div>


<script src="{{URL::asset('/js/script.js')}}"></script>
