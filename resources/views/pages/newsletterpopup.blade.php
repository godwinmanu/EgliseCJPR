@extends("layouts.template")

<div id="popupNewsletter" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p>
                    Insérer votre adresse mail pour recevoir au quotidien
                    les messages pour l'édificatin de votre foi et être informé de nos actualités.
                </p>
                <div>
                    <input type="email" name="popupNewsletter-email" class="form-control" placeholder="johhn@gmail.com">
                    <button type="submit" name="popupNewsletter-submit-button" class="form-control btn btn-primary text-light fw-bold">Envoyer</button>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" id="close-popupNewsletter">FERMER</button>
            </div>
        </div>
    </div>
</div>