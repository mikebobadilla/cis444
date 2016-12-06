/* Jason Sneddon - snedd001
 * CIS 444 - Term Project
 * Main_Page.js
 *
 */
 var deleteFlower = function(event, id){
   event.preventDefault();
   var result = window.confirm("Do you really want to delete this flower?");
   if(result){
     var flowerID = "deleteFlower" + id;
     document.getElementById(flowerID).submit();
   }
 }

 var deleteUser = function(event, id){
   event.preventDefault();
   var result = window.confirm("Do you really want to delete this user?");
   if(result){
     var userID = "deleteUser" + id;
     document.getElementById(userID).submit();
   }
 }
