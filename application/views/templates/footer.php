</div>
<!--wrapper end-->

<div id="chatwindow">
    <div id="balk">
        <span style="margin-left:10px;">Chat met een medewerker!</span>
        <span style="float:right; margin-right:8px;">X</span>
    </div>
    <div id="chat">

        <?php

        if (isset ($this->user)){
            ?>

        <h2>Zou fijn zijn als je ook gewoon inlogt, weten wij iig wat je naam is</h2>

                <input id="user" type="text" name="user" placeholder="Naam" required> <br/>
                <input id="email" type="text" name="mail" placeholder="E-mail adres" required> <br/>
                <button onclick="login()" name="submit">Start chat</button>
    </div>
        <?php

        }
        else {
            ?>
    <script>
        setInterval (function () { receive () }, 1000);
    </script>
            </div>
            <div id="message">
                <!-- <textarea rows="3" placeholder="Type hier uw bericht..." style="height: 100%; width: 100%;"></textarea> -->

                    <input type="text" id="bericht" name="bericht" style="width: 80%;"></input>
                    <button type="button" style="width: 18%;" onclick="send ()">Send</button>

            </div>
            <?php
        }
        ?>



</div>

</body>
</html>
