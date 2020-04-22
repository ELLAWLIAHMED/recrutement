
$(document).ready(function () {
    var membre = $('#manageMemberTable').attr("name");
    var cnc = $('#cnc').attr("name");

    $.ajax({
        url: 'controller/PostulationController.php',
        mimeType: 'json',
        data: {op: 'findForMembre',concours: cnc},
        type: "POST",
    success: function(data) {
        remplir(data);
    },
    error: function(error) {
        alert('Failed!');
    }
});


function valider(cin)
{
    alert(cin+' VALIDÉÉÉÉ');
}

function rejecter(cin)
{
    alert(cin+' REJECTER');
}



function remplir(data)
{
    if(data.length>0){
        var body = "<tr>";
        data.forEach((e) => {
        body    += "<td>" + e.nomFrancais + "</td>";
        body    += "<td>" + e.prenomFrancais + "</td>";
        body    += "<td>" + e.session + "</td>";
        if(e.etat === "Evaluation"){
            body    += "<td><span class=\"label bg-warning text-white\">" + e.etat + "</span></td>";
        }
        else if(e.etat === "Validé")
            body    += "<td><span class='label bg-success text-white'>" + e.etat + "</span></td>";
        else
            body    += "<td><span class='label bg-danger text-white'>" + e.etat + "</span></td>";
            body    += "<td>" + e.nbrPoste + "</td>";
            body    += "<td>" + e.type + "</td>";
            body    += '<td><a type="button" class="btn btn-info text-white" href="membrehome.php?p=profile&profile='+e.cin+'" ><i class="fas fa-id-badge"></i> Profile</a>'+
                '<button type="button" onclick="valider("'+e.cin+'")" class="btn btn-success text-white" ><i class="fas fa-clipboard-check"></i> Valider</button>'+
                '<button type="button" onclick="rejecter(\"'+e.cin+'\")" class="btn btn-danger text-white" > <i class="fas fa-thumbs-down"></i> Rejecter</button></td>';
            body    += "</tr>";
		});
	$( "#manageMemberTable tbody" ).html("");
    $( "#manageMemberTable tbody" ).html(body);
    $( "#manageMemberTable" ).DataTable({
        scrollX: true,
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
        }});

    }else{
        $( "#manageMemberTable tbody" ).html('<td colspan=6><div class="alert alert-success">Aucun postulation trouée !</div></td>');
    }

}

		

    });
