<style>
  table { width: 100%;}
  td  { height: 55px;}
  th { height: 45px;}
  @font-face {font-family: "bebas";src: url("fonts/BebasNeue-Bold.ttf");}
</style>
<div class="container">
<center><h1 class="page-header text-dark" style="font-family: bebas; ">C O N C O U R S</h1> </center>

     <table class="table table-striped" id="manageMemberTable" name=<?php echo $_SESSION['utilisateur']; ?>>
      <thead class="text-white bg-info text-center">
        <th>Session</th>
        <th>Date Debut Depot</th>
        <th>Date Fin Depot</th>
        <th>Etat</th>
        <th>nbr Poste</th>
        <th>Profile Cherché</th>
        <th>Commission</th>
        <th>Consulter</th>
       </thead>
     <tbody class="text-center" border="1">
    </tbody>
    </table>

</div>

<script src="script/membre/concours.js" type="text/javascript"></script>
<script src="script/concour.js" type="text/javascript"></script>
