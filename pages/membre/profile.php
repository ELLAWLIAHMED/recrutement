<style>
    body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
<?php if(isset($_GET['profile'])){
    include_once 'service/CandidatService.php';
    $cs = new CandidatService();
    $candidat = $cs->findByCin($_GET['profile']);
    ?>
<div class="container emp-profile">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img h-75 w-100">
                            <img src=<?php echo 'img/candidats/'.$candidat->getPhoto();?> class="rounded" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5 class="text-uppercase">
                                    <?php echo $candidat->getNomfr().' '.$candidat->getPrenomfr(); ?>
                                    </h5>
                                    <h6>
                                        Contact : <a href=<?php echo 'mailto:'.$candidat->getEmail();?> target="_top"><?php echo $candidat->getEmail();?></a>
                                    </h6>
                                    <p class="proile-rating">Candidat : <span>✓</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Apropos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Media</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <a type="button" class="btn btn-danger text-white" > <i class="fas fa-thumbs-down"></i> Rejecter</a>
                        <br> <br>
                    <a type="button" class="btn btn-success text-white" ><i class="fas fa-clipboard-check"></i>   &nbsp;Valider</a>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>CIN</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $candidat->getCin()?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nom en Arabe</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $candidat->getNomar()?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Prenom en Arabe</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $candidat->getPrenomar()?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nom</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $candidat->getNomfr()?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Prenom</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $candidat->getPrenomfr()?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $candidat->getEmail()?></p>
                                            </div>
                                        </div>

                                </div>        
                                <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Telephone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $candidat->getTelephone()?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Adresse</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $candidat->getAdresse()?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ville</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $candidat->getVille()?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Fonctionnaire</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $candidat->getFonctionnaire() == 0 ? 'No' : 'Oui'; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date de naissance</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $candidat->getDateNaissance()?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ville de Naissance</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $candidat->getLieuNaissance()?></p>
                                            </div>
                                        </div>

                                </div>  
                            </div>  
                                
                            </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3 shadow-sm">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSIHuvYp5e2kDgXc-fyf8-5U4W-er_rjkXD0QuhkTaG2gDlWFDy&usqp=CAU" 
                                alt=""width="90%" height="190">
                                <div class="card-body">
                                    <p class="card-text">CV...</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-outline-secondary" target="_blank" href=<?php echo 'img/candidats/cv/'.$candidat->getCin().'.pdf';?> ><i class="fas fa-eye"></i> View</a>
                                    </div>
                                    <small class="text-muted">Vérifié</small>
                                </div>
                            </div>
                            </div>
                         </div>
                         <div class="col-md-3">
                            <div class="card mb-3 shadow-sm">
                                <img src="https://st2.depositphotos.com/5266903/8981/v/950/depositphotos_89816802-stock-illustration-certified-diploma-rounded-vector-icon.jpg" 
                                alt=""width="90%" height="190">
                                <div class="card-body">
                                    <p class="card-text">DIPLÔME</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-outline-secondary" target="_blank" href=<?php echo 'img/candidats/diplome/'.$candidat->getCin().'.pdf';?>><i class="fas fa-eye"></i> View</a>
                                    </div>
                                    <small class="text-muted">Verfifé</small>
                                </div>
                            </div>
                            </div>
                         </div>
                         <div class="col-md-3">
                            <div class="card mb-3 shadow-sm">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTZP_ow-gnyo80I_SDitLTQgyvoUTSiFasxvz0YL78rp9A-O6Fm&usqp=CAU" 
                                alt="" width="90%" height="190">
                                <div class="card-body">
                                    <p class="card-text">CIN RECTO...</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-outline-secondary" target="_blank" href=<?php echo 'img/candidats/cne/'.$candidat->getCinrecto();?>><i class="fas fa-eye"></i> View</a>
                                    </div>
                                    <small class="text-muted">Verifé</small>
                                </div>
                            </div>
                            </div>
                         </div>
                         <div class="col-md-3">
                            <div class="card mb-3 shadow-sm">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTZP_ow-gnyo80I_SDitLTQgyvoUTSiFasxvz0YL78rp9A-O6Fm&usqp=CAU" 
                                alt=""width="90%" height="190">
                                <div class="card-body">
                                    <p class="card-text">CIN VERSO...</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-outline-secondary" target="_blank" href=<?php echo 'img/candidats/cne/'.$candidat->getCinverso();?> ><i class="fas fa-eye"></i> View</a>
                                    </div>
                                    <small class="text-muted">Verfié</small>
                                </div>
                            </div>
                            </div>
                         </div> 


                        </div>         
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }else {
    echo "<center><h4>Aucun Profile  !</h4></center>";
} ?>