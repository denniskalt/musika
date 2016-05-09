<!DOCTYPE HTML>
<html>
 <head>
     <meta charset="utf-8">
 </head>
 <body>
     <? var_dump($_REQUEST) ?>
     <form method="post" action="?">
         <fieldset>
              <legend>Texteingabefelder:</legend>
              <input type="text" value="foo" name="bar">
              <br><br>
              <textarea name="baz" rows="5" cols="40">
                  Zeilenumbrüche und Leerzeichen werden hier berücksichtigt!

                  ...
              </textarea>
              <br>
              <br>
              Datum: <input type="date" name="datum">
          </fieldset>

          <fieldset>
               <legend>Auswahlfelder:</legend>
               <label>
                   <input type="radio" name="food" value="pizza"> Pizza
               </label>
               <br>
               <label>
                   <input type="radio" name="food" value="salad"> Salat
               </label>
               <br>
               <label>
                   <input type="radio" name="food" value="burger"> Hamburger
               </label>
               <br>
               <br>
               <select name="food2">
                   <option>Pizza</option>
                   <option value="salad">Salat</option>
                   <option value="burger" selected="selected">Hamburger</option>
               </select>
               <br>
               <br>
               Was soll drauf? <br>
               <select name="topping[]" multiple="multiple">
                   <option value="mushrooms">Pilze</option>
                   <option value="double_cheese">Doppelt Käse</option>
                   <option value="chili">Pepperoni</option>
               </select>
               <br><br>
               <label>
                   <input type="checkbox" name="goody" value="1" checked="checked"> Erstbestellerbonus?
               </label>
               <br>
               <label>
                   <input type="checkbox" name="tos" value="1"> Ich aktzeptiere die AGBs
               </label>
           </fieldset>

           <button>Abschicken</button>
     </form>
 </body>
</html>
