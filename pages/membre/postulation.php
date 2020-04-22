<style>
  table { width: 100%;}
  td  { height: 55px;}
  th { height: 45px;}
</style>
<input type="hidden" id="cnc" name="<?php if(isset($_GET['cnc'])){echo $_GET['cnc'];}?>">
<div class="container">
<center><h3 class="page-header text-dark" style="font-family: Suez One; ">POSTULATIONS AUX CONCOURS</h3> </center>
<br><br><br>
     <table class="" id="manageMemberTable" name=<?php echo $_SESSION['utilisateur']; ?>>
      <thead class="text-white bg-info text-center">
        <th>NOM</th>
        <th>PRENOM</th>
        <th>SESSION</th>
        <th>ETAT</th>
        <th>NBR POSTE</th>
        <th>PROFILE</th>
        <th>OPTIONS</th>
       </thead>
     <tbody class="text-center" border="1">
    </tbody>
    </table>

</div>

<script src="script/membre/postulation.js" type="text/javascript"></script>
