<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<!-- Validator.html

     A document for Validator.js

     creates text boxes for a person's name, credit card number, date of birth, or telephone number

     -->

     <html lang = "en">

     <head>

       <title>Illustrate form input validation>

       </title>

       <meta charset ="utf-8" />

       <script type = "xxxx/xxxxxxxxxx" src = "Validator.js">

       </script>

     </head>

     <body>

  

     <h1 align = "center">Three Form Elements that are Bulletproofed"</h1><br />

       <form id = "myForm" action = "">

       <p>

   

            <fieldset>

                     <legend><h2>Personal Information:</legend></h2><br /><br />

    <label> <input type = "radio" name = "planeButton"  value = "Fieldset"

              xx = "planeChoice (fieldtext)"/>

                        <input type="text" id = "custName"> Name:(Last name, first name, middle initial)<br /><br />

    

                        <input type id ="birthDate"> Date of birth (dd-mm-yyyy)<br /><br />

          <input type id ="phone"> Phone Number (ddd-ddd-dddd):

 </label>

                   </fieldset><br />

 

 

     <select>

  <option value="">Visa</option>

 <option value="master">Master</option>

        <label> <input type = "radio" name = "planeButton"  value = "Select"

          xx = "planeChoice (select)"/>

    <label>

     <input type = "text" id = "payment" /> Card Number:(ddddddd):   <br />

 <br />

 Expiry Date:(mm-yy): <input type = "text" id = "expiryDate" />

  

  

  </label>

 

  </select><br /><br />

  <input type = "reset" id = "reset" />

  <input type = "submit" id = "submit" />

  

</p>

</form>

</body>

</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- validator.js
     An event of input validation using the change and submit events
     -->
     <html lang = "en">
     <head>
       <title>Input validation>
       </title>
       <meta charset ="utf-8" />
       <script type = "xxxx/xxxxxxxxxx">
       </script>
     </head>
         <meta name="Generator" content="EditPlus">
         <meta name="Author" content="">
         <meta name="Keywords" content="">
          <meta name="Description" content="">
          </head>
          <body>
          <script type = "text'javascript">
           function ckName()
     {
 var myName = document.getElementByID(custName");
 var pos = myName.value.search(/^[A-Z][a-z]+, ? [A-Z][a-z]+, ? [A-Z]\.?$/);
 if (pos !=0){
 alert("The name you entered (" + myName.value +
       ") is not in the correct form. \n"+
   "The corect form is:" +
   "last-name, first-name, middle-initial \n" +
   "Please go back and fix your name");
 return false;
 }else
    return true;
 }
        
 function chkPhone(){
 var myPhone = document.getEleementBYId("phone");
 var pos = myPhone.value.search(/^\d{3}-\d{3}-\d{4}$/);
 if (pos !=0){
                alert("The phone number you entered (" + myPhone.value +
       ") is not in the correct form. \n"+
   "The corect form is: ddd-ddd-dddd \n" +
   "Please go back and fix your phone number");
    return false;
     }else
    return true;
 }
 
              function chkbirthDateB(){
 var myBirthdate = document.getEleementBYId("BirthDate");
 var pos = mybirthDate.value.search(/^\d{2}-\m{2}-\y{4}$/);
 if (pos !=0){
                alert("The date of birth you entered (" + mybirthDate.value +
       ") is not in the correct form. \n"+
   "The corect form is: dd-mm-yyyy \n" +
   "Please go back and fix your date of birth");
    return false;
     }else
    return true;
   }
   function chkpayment(){
 var mypayment = document.getEleementBYId("payment");
 var pos = mypayment.value.search(/^\{7}$/);
 if (pos !=0){
                alert("The card number you entered (" + mypayment.value +
       ") is not in the correct form. \n"+
   "The corect form is: ddddddd \n" +
   "Please go back and fix your card number");
    return false;
     }else
    return true;
   }
     function chkexpiryDate(){
 var myexpiryDate = document.getEleementBYId("ExpiryDate");
 var pos = myexpiryDate.value.search(/^\{7}$/);
 if (pos !=0){
                alert("The card number you entered (" + myexpiryDate.value +
       ") is not in the correct form. \n"+
   "The corect form is: mm-yy \n" +
   "Please go back and fix your card date");
    return false;
     }else
    return true;
 document.getElementBYId("custName").onchanage = chkName;
 document.getElementById("phone").onchange = chkPhone;
 document.getElementById("birthDate").onchange = chkbirthDate
 document.getElementBYId("payment").onchanage = chkpayment;
 document.getElementBYId("expiryDate").onchanage = chkExpiryDate;
 
 </script>
</body>
</html>
