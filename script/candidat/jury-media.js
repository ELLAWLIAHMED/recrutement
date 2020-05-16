$(document).ready(function() {
  alert('okey');
  $(document).on('click', '.show-jury', function (){
    $('#thesesModal').modal('hide');
   $('#hidden2').text(this.id);
   $.ajax({
     url: 'controller/JuryController.php',
     type: 'post',
     data: {op: '' ,idThese:this.id},
     dataType: 'json',
     success:function(response) {
           remplirJury(response);
     },
     error: function(response){
       alert("Error");


     }
   });
  });
  function remplirJury(response){
    var body='';
    for (var i = 0; i < response.length; i++) {
      body+=`<tr><td>`+response[i].nom +`</td><td>`+response[i].prenom +`</td><td>`+response[i].etablissement +`</td><td>`+response[i].grade +`</td></tr>`;
    }
    $('#listejuries').html(body);
  }
});
