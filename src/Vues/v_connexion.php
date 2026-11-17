<?php

/**
 * Vue Connexion
 *
 * PHP Version 8
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2026 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 * @link      https://getbootstrap.com/docs/5.3/ Documentation Bootstrap v5.3
 */

?>
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Identification utilisateur</h3>
            </div>
            <div class="card-body">
                <form method="post" 
                      action="index.php?uc=connexion&action=valideConnexion">
                    <fieldset>
                        <div class="imput-group mb-3">
                                <span class="input-group-text">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input class="form-control" placeholder="Login"
                                       name="login" type="text" maxlength="45"
                                       aria-label="login">
                        </div>
                        <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input class="form-control"
                                       placeholder="Mot de passe" name="mdp"
                                       type="password" maxlength="45"
                                       aria_label="Mot de passe">
                        </div>
                        <div class="d-grid">
                        <input class="btn btn-success btn-lg"
                               type="submit" value="Se connecter">
                        <div/>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>