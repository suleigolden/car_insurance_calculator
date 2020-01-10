 function validateForm() {
    const value = document.forms["calculateForm"]["value"].value;
    const percentage = document.forms["calculateForm"]["tax_percentage"].value;
    const instalments = document.forms["calculateForm"]["numberOfIntalment"].value;
  
    if (parseInt(value) < 100) {
        
        document.getElementById('errorMessage').innerHTML  = "Estimated Value must be  greater than 100";

         return false;

      }else if (parseInt(value) > 100000) {
        
        document.getElementById('errorMessage').innerHTML  = "Estimated Value can not be greater than 100000";

         return false;
      }
}