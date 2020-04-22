$(document).ready(function () {
    var manageMemberTable = $("#manageMemberTable")
    var etab = manageMemberTable.attr("name");
    $.ajax({
        url: 'controller/PostulationController.php',
        mimeType: 'json',
        data: {op: '',etab: etab},
        type: "POST",
    success: function(data) {
        remplir(data);
    },
    error: function(error) {
        alert('Failed!');
    }
});
/*
function valider(cin)
    {
        alert('fatima');
        alert(cin+' VALIDÉÉÉÉ');
    }

function rejecter(cin)
    {
        alert(cin+' REJECTER');
    }
  */
 $(document).on('click', '.valider', function() {

        let cin=$(this).closest('tr').find('th').attr('value');
        //let cin=$(this).closest('tr').find('th').text();
        //let cin=event.target.name;
        //let idconcour = $(this).closest('tr').find('td').eq(0).text();
        var idconcour=$(this).closest('tr').find('td').eq(0).text();
        //alert(cin);
        //alert(idconcour);

        $.ajax({
            url: 'controller/PostulationController.php',
            data: {op: 'valide', cin: cin,id:idconcour,etab: etab},
            type: 'POST',
            success: function(data, textStatus, jqXHR) {
                window.location.reload();
                //alert(cin);
                //alert(idconcour);
                //location.reload();
                remplir(data);//je dois remplacer ca avec le lien vers le candidat
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
                alert("pas bien");
            }
        });
    });


        function remplir(data)
        {
        var body = "<tr>";
        data.forEach((e) => {

            body    += '<th value='+e.cin+'>'+ e.cin + '</th>';
            body    += "<td>" + e.IdConcour + "</td>";
            body    += "<td>" + e.dateDePostulation+ "</td>";
            body    += "<td>" + e.etat + "</td>";
            body    += '<td><a type="button" class="btn btn-info text-white" href="home.php?p=profile&profile='+e.cin+'" ><i class="fas fa-id-badge"></i> Profile </a></td>'+
                '<td><button type="button" class="btn btn-success text-white valider" ><i class="fas fa-clipboard-check"></i> Valider</button>'+
                '</td>';
            body    += "</tr>";
        });
                    /*DataTables instantiation.*/
        //  manageMemberTable.DataTable({scrollX: true});
        //$( "#body" ).html("");
        //$( "#body" ).html(body);
					$( "#manageMemberTable tbody" ).html("");
					$( "#manageMemberTable tbody" ).html(body);
					$("#manageMemberTable").DataTable({
							//scrollX: true,
							language: {
								"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
		}});


        }

    });
