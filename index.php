<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autofill Is Evil</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </head>
  <body>

    <div id="wrapper">

      <h1>Autofill Is Evil</h1>

      <?php if($_POST): ?>
        <div class="submit-data">
          <h2>You submitted:</h2>
          <pre><?php print_r($_POST); ?></pre>
        </div>
      <?php endif; ?>

      <form method="post">
        <section>
          <p>Enter a few letters of the "Name" and/or the "Name on Card" field (if using HTTPS) and activate your browser's autocomplete feature- it will gladly fill out and send along fields you didn't even know were on the page!  Click "Toggle Hidden Fields" in each section to hide/show these hidden fields.  Submit the form with or without the fields hidden, and the server will display all data it received from your submission.</p>
        </section>

        <section>
          <h3>Common Billing/Shipping/Profile Fields</h3>
        </section>

        <section>

          <div class="form-item">
            <label for="full_name">Name</label>
            <input type="text" id="full_name" name="full_name" value="" placeholder="Tyler Durden" autocomplete="name" x-autocompletetype="name-full" />
          </div>

          <div class="form-item toggle">
            <label for="address_1">Address</label>
            <input type="text" id="address_1" name="address_1" value="" placeholder="420 Paper St." autocomplete="address-line1" x-autocompletetype="address-line1" />
          </div>

          <div class="form-item toggle">
            <label for="address_2">Address (2)</label>
            <input type="text" id="address_2" name="address_2" value="" placeholder="Room 214" autocomplete="address-line2" x-autocompletetype="address-line2" />
          </div>

          <div class="form-item toggle">
            <label for="city">City</label>
            <input type="text" id="city" name="city" value="" placeholder="Wilmington" autocomplete="city" x-autocompletetype="city" />
          </div>

          <div class="form-item toggle">
            <label for="state">State</label>
            <input type="text" id="state" name="state" value="" placeholder="DE" autocomplete="state" x-autocompletetype="state" />
          </div>

          <div class="form-item toggle">
            <label for="zip">Zip</label>
            <input type="text" id="zip" name="zip" value="" placeholder="19886" autocomplete="postal-code" x-autocompletetype="postal-code" />
          </div>

          <div class="form-item toggle">
            <label for="country">Country</label>
            <input type="text" id="country" name="country" value="" placeholder="USA" autocomplete="country-name" x-autocompletetype="country" />
          </div>

          <div class="form-item toggle">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="" placeholder="(410) 867 5309" autocomplete="tel-national" x-autocompletetype="phone-national" />
          </div>

          <div class="form-item toggle">
            <label for="fax">Fax</label>
            <input type="text" id="fax" name="fax" value="" placeholder="(410) 555 1212" autocomplete="fax-national" x-autocompletetype="fax-national" />
          </div>

          <div class="form-item toggle">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="" placeholder="tylerd@notarealdomain.com" autocomplete="email" x-autocompletetype="email" />
          </div>

          <div class="form-item toggle">
            <label for="organization">Organization</label>
            <input type="text" id="organization" name="organization" value="" placeholder="Project Mayhem" autocomplete="org" x-autocompletetype="organization" />
          </div>

          <div class="form-item toggle">
            <label for="position">Position/Title</label>
            <input type="text" id="position" name="position" value="" placeholder="Jack's Smirking Revenge" autocomplete="organization-title" x-autocompletetype="organization-title" />
          </div>

          <div class="form-item toggle">
            <label for="birthday">Birthday</label>
            <input type="text" id="birthday" name="birthday" value="" placeholder="01/01/1970" autocomplete="bday" x-autocompletetype="birthday" />
          </div>

          <div class="form-item toggle">
            <label for="gender">Gender</label>
            <input type="text" id="gender" name="gender" value="" placeholder="Male" autocomplete="sex" x-autocompletetype="gender" />
          </div>

          <div class="form-item toggle">
            <label for="url">URL</label>
            <input type="text" id="url" name="url" value="" placeholder="http://www.mywebsite.com" autocomplete="url" x-autocompletetype="url" />
          </div>

          <div class="form-item actions">
            <a class="toggle">Toggle Hidden Fields</a>
          </div>

        </section>

        <section>
          <h3>Common Payment Fields*</h3>
          <p><em>*This section will likely not autofill without an HTTPS connection</em></p>
        </section>

        <section>

          <div class="form-item">
            <label for="cc_full_name">Name on Card</label>
            <input type="text" id="cc_full_name" name="cc_full_name" value="" placeholder="Tyler Durden" autocomplete="cc-name" x-autocompletetype="cc-full-name" />
          </div>

          <div class="form-item toggle">
            <label for="cc_number">Card Number</label>
            <input type="text" id="cc_number" name="cc_number" value="" placeholder="4111111111111111" autocomplete="cc-number" x-autocompletetype="cc-number" />
          </div>

          <div class="form-item toggle">
            <label for="cc_exp_month">Card Expiration Month</label>
            <input type="text" id="cc_exp_month" name="cc_exp_month" value="" placeholder="<?php echo date('m'); ?>" autocomplete="cc-exp-month" x-autocompletetype="cc-exp-month" />
          </div>

          <div class="form-item toggle">
            <label for="cc_exp_year">Card Expiration Year</label>
            <input type="text" id="cc_exp_year" name="cc_exp_year" value="" placeholder="<?php echo date('Y'); ?>" autocomplete="cc-exp-year" x-autocompletetype="cc-exp-year" />
          </div>

          <div class="form-item toggle">
            <label for="cc_csc">Card Security/Verification Code</label>
            <input type="text" id="cc_csc" name="cc_csc" value="" placeholder="123" autocomplete="cc-csc" x-autocompletetype="cc-csc" />
          </div>

          <div class="form-item actions">
            <a class="toggle">Toggle Hidden Fields</a>
          </div>

        </section>

        
        <section>
          <div class="form-item actions">
            <input type="submit" value="Submit" />
          </div>
        </section>

      </form>  

    </div>

  </body>
</html>


<!-- cheat sheet: http://ryan.mcgeary.org/2014/08/20/html5-autocomplete-cheatsheet/ -->


<style>

a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:'';content:none}table{border-collapse:collapse;border-spacing:0}

html {
  font-size: 62.5%;
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

body {
  min-height: 100%;
  overflow-x: hidden;
  padding: 1.6rem;
  background: #f4f4f4;
  font-family: "Gill Sans", "Gill Sans MT", "Calibri", "sans-serif";
  font-size: 1.6rem;
  line-height: 1.3;
}

#wrapper {
  max-width: 64rem;
  margin: 0 auto;
}

strong {
  font-weight: bold;
}

em {
  font-style: italic;
}

section {
  margin: 2.4rem 0 4.2rem;
}

h1 {
  font-size: 3.2rem;
  margin-bottom: 1rem;
  font-weight: bold;
}

h2 {
  font-size: 2.8rem;
  margin-bottom: 1.2rem;
}

h3 {
  font-size: 2.4rem;
  margin-bottom: 1.4rem;
}

p {
  line-height: 1.6;
  margin-bottom: 1.6rem;
}

a {
  color: #008;
  text-decoration: underline;
  cursor: pointer;
}
  
  a:hover {
    color: #000;
    text-decoration: none;
  }

pre {
  font-family: "Consolas", "monaco", "monospace";
  margin-bottom: 1.6rem;
}

label {
  display: block;
  font-size: 1.8rem;
  font-weight: bold;
  margin-bottom: .6rem;
}

input[type="text"] {
  display: block;
  width: 100%;
  font-family: "Gill Sans", "Gill Sans MT", "Calibri", "sans-serif";
  font-size: 1.8rem;
  padding: .4rem 1rem;
  border: 1px solid #888;
  border-left: .4rem solid #080;
  background: #fff;
  outline: none;
  border-radius: none;
  -webkit-appearance: none;
  -moz-appearance:    none;
  appearance:         none;
}

  .row.toggle input[type="text"] {
    border-left: .4rem solid #800;
  }

input[type="submit"] {
  display: block;
  width: 100%;
  max-width: 30rem;
  margin: 0 auto;
  font-family: "Gill Sans", "Gill Sans MT", "Calibri", "sans-serif";
  font-size: 1.8rem;
  padding: .4rem;
  border: 1px solid #222;
  background: #444;
  color: #fff;
  outline: none;
  border-radius: none;
  -webkit-appearance: none;
  -moz-appearance:    none;
  appearance:         none;
}

  input[type="submit"]:hover {
    cursor: pointer;
    opacity: .8;
  }

.form-item {
  margin-bottom: 1.8rem;
}

  .form-item.toggle {
    position: absolute;
    left: -100%;
  }

    .form-item.toggle.visible {
      position: static;
    }

  .form-item.actions {
    text-align: center;
  }

.submit-data {
  border-left: 2px solid #ccc;
  padding-left: 1.6rem;
  color: #800;
}

@media(min-width: 640px) {

  section, .form-item.actions {
    clear: left;
  }
  
  .form-item.toggle.visible {
    float: left;
    width: 48%;
    margin-right: 4%;
  }

  .form-item:nth-child(odd).toggle.visible {
    margin-right: 0;
  }
}

</style>



<script>

  $(document).ready(function(){

    $("a.toggle").on("click", function(){

      $(this).closest("section").find(".form-item.toggle").each(function(){

        $(this).toggleClass("visible");
      });

    });

  });

</script>